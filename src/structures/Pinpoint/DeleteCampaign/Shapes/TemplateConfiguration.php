<?php

namespace Sunaoka\Aws\Structures\Pinpoint\DeleteCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Template $EmailTemplate
 * @property Template $PushTemplate
 * @property Template $SMSTemplate
 * @property Template $VoiceTemplate
 * @property Template $InAppTemplate
 */
class TemplateConfiguration extends Shape
{
    /**
     * @param array{
     *     EmailTemplate?: Template,
     *     PushTemplate?: Template,
     *     SMSTemplate?: Template,
     *     VoiceTemplate?: Template,
     *     InAppTemplate?: Template
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
