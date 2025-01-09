<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateJourney\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property JourneyPushMessage $MessageConfig
 * @property string $NextActivity
 * @property string $TemplateName
 * @property string $TemplateVersion
 */
class PushMessageActivity extends Shape
{
    /**
     * @param array{
     *     MessageConfig?: JourneyPushMessage,
     *     NextActivity?: string,
     *     TemplateName?: string,
     *     TemplateVersion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
