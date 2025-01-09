<?php

namespace Sunaoka\Aws\Structures\LakeFormation\SearchDatabasesByLFTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 * @property string $CatalogId
 * @property list<Shapes\LFTag> $Expression
 */
class SearchDatabasesByLFTagsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>,
     *     CatalogId?: string,
     *     Expression: list<Shapes\LFTag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
