<?php

namespace Sunaoka\Aws\Structures\LakeFormation\ListLFTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 * @property 'FOREIGN'|'ALL' $ResourceShareType
 * @property int<1, 1000> $MaxResults
 * @property string $NextToken
 */
class ListLFTagsRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string,
     *     ResourceShareType?: 'FOREIGN'|'ALL',
     *     MaxResults?: int<1, 1000>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
