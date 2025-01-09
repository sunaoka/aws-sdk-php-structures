<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateInAppTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $CreateNewVersion
 * @property Shapes\InAppTemplateRequest $InAppTemplateRequest
 * @property string $TemplateName
 * @property string $Version
 */
class UpdateInAppTemplateRequest extends Request
{
    /**
     * @param array{
     *     CreateNewVersion?: bool,
     *     InAppTemplateRequest: Shapes\InAppTemplateRequest,
     *     TemplateName: string,
     *     Version?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
