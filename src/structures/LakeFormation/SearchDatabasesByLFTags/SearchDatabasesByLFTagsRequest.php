<?php

namespace Sunaoka\Aws\Structures\LakeFormation\SearchDatabasesByLFTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property string|null $CatalogId
 * @property list<Shapes\LFTag> $Expression
 */
class SearchDatabasesByLFTagsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     CatalogId?: string|null,
     *     Expression: list<Shapes\LFTag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
