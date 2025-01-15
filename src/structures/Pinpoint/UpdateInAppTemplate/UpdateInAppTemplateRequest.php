<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateInAppTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $CreateNewVersion
 * @property Shapes\InAppTemplateRequest $InAppTemplateRequest
 * @property string $TemplateName
 * @property string|null $Version
 */
class UpdateInAppTemplateRequest extends Request
{
    /**
     * @param array{
     *     CreateNewVersion?: bool|null,
     *     InAppTemplateRequest: Shapes\InAppTemplateRequest,
     *     TemplateName: string,
     *     Version?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
