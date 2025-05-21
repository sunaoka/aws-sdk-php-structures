<?php

namespace Sunaoka\Aws\Structures\CloudTrail\SearchSampleQueries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Description
 * @property string|null $SQL
 * @property float|null $Relevance
 */
class SearchSampleQueriesSearchResult extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Description?: string|null,
     *     SQL?: string|null,
     *     Relevance?: float|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
