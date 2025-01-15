<?php

namespace Sunaoka\Aws\Structures\CloudSearchDomain\Search;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\SearchStatus|null $status
 * @property Shapes\Hits|null $hits
 * @property array<string, Shapes\BucketInfo>|null $facets
 * @property array<string, Shapes\FieldStats>|null $stats
 */
class SearchResponse extends Response
{
}
