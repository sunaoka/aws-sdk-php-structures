<?php

namespace Sunaoka\Aws\Structures\LakeFormation\ListLFTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 * @property 'FOREIGN'|'ALL' $ResourceShareType
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListLFTagsRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string,
     *     ResourceShareType?: 'FOREIGN'|'ALL',
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
