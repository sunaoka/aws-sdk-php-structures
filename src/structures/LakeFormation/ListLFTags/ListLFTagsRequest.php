<?php

namespace Sunaoka\Aws\Structures\LakeFormation\ListLFTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CatalogId
 * @property 'FOREIGN'|'ALL'|null $ResourceShareType
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 */
class ListLFTagsRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string|null,
     *     ResourceShareType?: 'FOREIGN'|'ALL'|null,
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
