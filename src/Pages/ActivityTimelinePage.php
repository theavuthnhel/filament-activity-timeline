<?php

namespace TheavuthNhel\ActivityTimeline\Pages;

use Filament\Resources\Pages\Concerns\InteractsWithRecord;
use Filament\Resources\Pages\Page;
use TheavuthNhel\ActivityTimeline\Concerns\HasSetting;

class ActivityTimelinePage extends Page
{
    use HasSetting, InteractsWithRecord;

    protected string $view = 'activity-timeline::pages.view-activities';

    public function mount(int|string $record): void
    {
        static::authorizeResourceAccess();

        $this->record = $this->resolveRecord($record);
    }
}
