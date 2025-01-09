<?php

namespace Sunaoka\Aws\Structures\Pinpoint\CreateInAppTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\InAppTemplateRequest $InAppTemplateRequest
 * @property string $TemplateName
 */
class CreateInAppTemplateRequest extends Request
{
    /**
     * @param array{
     *     InAppTemplateRequest: Shapes\InAppTemplateRequest,
     *     TemplateName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
