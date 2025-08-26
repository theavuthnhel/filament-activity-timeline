<?php

namespace TheavuthNhel\ActivityTimeline\Components;

use Filament\Forms\Components\Concerns\CanAllowHtml;
use Filament\Infolists\Components\Entry;
use TheavuthNhel\ActivityTimeline\Concerns\CanModifyState;

class ActivityTitle extends Entry
{
    use CanAllowHtml, CanModifyState;

    protected string $viewIdentifier = 'activityTitle';

    protected string $view = 'activity-timeline::infolists.components.activity-title';

    public function getViewIdentifier(): string
    {
        return $this->viewIdentifier;
    }
}
