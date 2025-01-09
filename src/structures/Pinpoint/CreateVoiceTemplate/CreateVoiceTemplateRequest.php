<?php

namespace Sunaoka\Aws\Structures\Pinpoint\CreateVoiceTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TemplateName
 * @property Shapes\VoiceTemplateRequest $VoiceTemplateRequest
 */
class CreateVoiceTemplateRequest extends Request
{
    /**
     * @param array{
     *     TemplateName: string,
     *     VoiceTemplateRequest: Shapes\VoiceTemplateRequest
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
