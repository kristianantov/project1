import {MDCRipple} from '@material/ripple/index';
import $ from 'jquery';
require("jquery-ui/ui/widgets/autocomplete");

import {MDCTextField} from '@material/textfield';

const textField = new MDCTextField(document.querySelector('.mdc-text-field'));



    var availableTags = [
        "ActionScript",
        "AppleScript",
        "Asp",
        "BASIC",
        "C",
        "C++",
        "Clojure",
        "COBOL",
        "ColdFusion",
        "Erlang",
        "Fortran",
        "Groovy",
        "Haskell",
        "Java",
        "JavaScript",
        "Lisp",
        "Perl",
        "PHP",
        "Python",
        "Ruby",
        "Scala",
        "Scheme"
    ];



    $( "#my-text-field" ).autocomplete({
        source: function (request, response) {
            $.getJSON("autocomplete", { term: request.term }, response);
        }
    });



const ripple = new MDCRipple(document.querySelector('.foo-button'));