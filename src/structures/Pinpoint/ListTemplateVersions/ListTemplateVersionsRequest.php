<?php

namespace Sunaoka\Aws\Structures\Pinpoint\ListTemplateVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property string $PageSize
 * @property string $TemplateName
 * @property string $TemplateType
 */
class ListTemplateVersionsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     PageSize?: string,
     *     TemplateName: string,
     *     TemplateType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
