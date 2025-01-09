<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobTemplates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Category
 * @property 'NAME'|'CREATION_DATE'|'SYSTEM' $ListBy
 * @property int<1, 20> $MaxResults
 * @property string $NextToken
 * @property 'ASCENDING'|'DESCENDING' $Order
 */
class ListJobTemplatesRequest extends Request
{
    /**
     * @param array{
     *     Category?: string,
     *     ListBy?: 'NAME'|'CREATION_DATE'|'SYSTEM',
     *     MaxResults?: int<1, 20>,
     *     NextToken?: string,
     *     Order?: 'ASCENDING'|'DESCENDING'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
