<?php

namespace Sunaoka\Aws\Structures\CloudSearchDomain\Search;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\SearchStatus $status
 * @property Shapes\Hits $hits
 * @property array<string, Shapes\BucketInfo> $facets
 * @property array<string, Shapes\FieldStats> $stats
 */
class SearchResponse extends Response
{
}
