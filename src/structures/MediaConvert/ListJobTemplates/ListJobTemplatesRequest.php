<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobTemplates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Category
 * @property 'NAME'|'CREATION_DATE'|'SYSTEM'|null $ListBy
 * @property int<1, 20>|null $MaxResults
 * @property string|null $NextToken
 * @property 'ASCENDING'|'DESCENDING'|null $Order
 */
class ListJobTemplatesRequest extends Request
{
    /**
     * @param array{
     *     Category?: string|null,
     *     ListBy?: 'NAME'|'CREATION_DATE'|'SYSTEM'|null,
     *     MaxResults?: int<1, 20>|null,
     *     NextToken?: string|null,
     *     Order?: 'ASCENDING'|'DESCENDING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
