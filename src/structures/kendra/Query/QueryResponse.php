<?php

namespace Sunaoka\Aws\Structures\kendra\Query;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $QueryId
 * @property list<Shapes\QueryResultItem> $ResultItems
 * @property list<Shapes\FacetResult> $FacetResults
 * @property int $TotalNumberOfResults
 * @property list<Shapes\Warning> $Warnings
 * @property list<Shapes\SpellCorrectedQuery> $SpellCorrectedQueries
 * @property list<Shapes\FeaturedResultsItem> $FeaturedResultsItems
 */
class QueryResponse extends Response
{
}
