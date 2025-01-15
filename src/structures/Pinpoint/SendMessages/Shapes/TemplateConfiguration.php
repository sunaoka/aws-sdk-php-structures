<?php

namespace Sunaoka\Aws\Structures\Pinpoint\SendMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Template|null $EmailTemplate
 * @property Template|null $PushTemplate
 * @property Template|null $SMSTemplate
 * @property Template|null $VoiceTemplate
 * @property Template|null $InAppTemplate
 */
class TemplateConfiguration extends Shape
{
    /**
     * @param array{
     *     EmailTemplate?: Template|null,
     *     PushTemplate?: Template|null,
     *     SMSTemplate?: Template|null,
     *     VoiceTemplate?: Template|null,
     *     InAppTemplate?: Template|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
