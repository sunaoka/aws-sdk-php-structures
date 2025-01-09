<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateTemplateActiveVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\TemplateActiveVersionRequest $TemplateActiveVersionRequest
 * @property string $TemplateName
 * @property string $TemplateType
 */
class UpdateTemplateActiveVersionRequest extends Request
{
    /**
     * @param array{
     *     TemplateActiveVersionRequest: Shapes\TemplateActiveVersionRequest,
     *     TemplateName: string,
     *     TemplateType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
