<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetJourney\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property JourneyPushMessage|null $MessageConfig
 * @property string|null $NextActivity
 * @property string|null $TemplateName
 * @property string|null $TemplateVersion
 */
class PushMessageActivity extends Shape
{
    /**
     * @param array{
     *     MessageConfig?: JourneyPushMessage|null,
     *     NextActivity?: string|null,
     *     TemplateName?: string|null,
     *     TemplateVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
