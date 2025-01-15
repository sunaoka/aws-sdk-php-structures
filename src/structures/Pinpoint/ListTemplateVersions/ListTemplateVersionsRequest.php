<?php

namespace Sunaoka\Aws\Structures\Pinpoint\ListTemplateVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property string|null $PageSize
 * @property string $TemplateName
 * @property string $TemplateType
 */
class ListTemplateVersionsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     PageSize?: string|null,
     *     TemplateName: string,
     *     TemplateType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
