<?php

namespace App\View\Components;
use Illuminate\view\Component;
use Illuminate\View\view;

class LandingLayout extends Component
{
/**
 * get the view / contents that represents the component.
 */
public function render(): view
{
    return view(view: 'layouts.landing');
}
}