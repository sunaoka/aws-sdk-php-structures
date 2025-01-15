<?php

namespace Sunaoka\Aws\Structures\Pinpoint\CreateJourney\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property JourneySMSMessage|null $MessageConfig
 * @property string|null $NextActivity
 * @property string|null $TemplateName
 * @property string|null $TemplateVersion
 */
class SMSMessageActivity extends Shape
{
    /**
     * @param array{
     *     MessageConfig?: JourneySMSMessage|null,
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
