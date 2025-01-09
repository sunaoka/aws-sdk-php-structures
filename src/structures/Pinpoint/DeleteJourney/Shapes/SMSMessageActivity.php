<?php

namespace Sunaoka\Aws\Structures\Pinpoint\DeleteJourney\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property JourneySMSMessage $MessageConfig
 * @property string $NextActivity
 * @property string $TemplateName
 * @property string $TemplateVersion
 */
class SMSMessageActivity extends Shape
{
    /**
     * @param array{
     *     MessageConfig?: JourneySMSMessage,
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
