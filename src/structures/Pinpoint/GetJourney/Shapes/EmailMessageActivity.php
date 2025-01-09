<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetJourney\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property JourneyEmailMessage $MessageConfig
 * @property string $NextActivity
 * @property string $TemplateName
 * @property string $TemplateVersion
 */
class EmailMessageActivity extends Shape
{
    /**
     * @param array{
     *     MessageConfig?: JourneyEmailMessage,
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
