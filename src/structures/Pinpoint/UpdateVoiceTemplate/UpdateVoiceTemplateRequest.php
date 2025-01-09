<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateVoiceTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $CreateNewVersion
 * @property string $TemplateName
 * @property string $Version
 * @property Shapes\VoiceTemplateRequest $VoiceTemplateRequest
 */
class UpdateVoiceTemplateRequest extends Request
{
    /**
     * @param array{
     *     CreateNewVersion?: bool,
     *     TemplateName: string,
     *     Version?: string,
     *     VoiceTemplateRequest: Shapes\VoiceTemplateRequest
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
