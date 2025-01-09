<?php

namespace Sunaoka\Aws\Structures\Pinpoint\ListTemplates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property string $PageSize
 * @property string $Prefix
 * @property string $TemplateType
 */
class ListTemplatesRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     PageSize?: string,
     *     Prefix?: string,
     *     TemplateType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
