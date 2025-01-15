<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateVoiceTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $CreateNewVersion
 * @property string $TemplateName
 * @property string|null $Version
 * @property Shapes\VoiceTemplateRequest $VoiceTemplateRequest
 */
class UpdateVoiceTemplateRequest extends Request
{
    /**
     * @param array{
     *     CreateNewVersion?: bool|null,
     *     TemplateName: string,
     *     Version?: string|null,
     *     VoiceTemplateRequest: Shapes\VoiceTemplateRequest
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
