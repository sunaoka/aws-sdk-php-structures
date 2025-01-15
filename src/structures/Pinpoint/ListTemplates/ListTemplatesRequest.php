<?php

namespace Sunaoka\Aws\Structures\Pinpoint\ListTemplates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property string|null $PageSize
 * @property string|null $Prefix
 * @property string|null $TemplateType
 */
class ListTemplatesRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     PageSize?: string|null,
     *     Prefix?: string|null,
     *     TemplateType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
