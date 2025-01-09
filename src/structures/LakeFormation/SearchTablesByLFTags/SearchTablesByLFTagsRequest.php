<?php

namespace Sunaoka\Aws\Structures\LakeFormation\SearchTablesByLFTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int $MaxResults
 * @property string $CatalogId
 * @property list<Shapes\LFTag> $Expression
 */
class SearchTablesByLFTagsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int,
     *     CatalogId?: string,
     *     Expression: list<Shapes\LFTag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
