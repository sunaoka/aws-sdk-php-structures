<?php

namespace Sunaoka\Aws\Structures\kendra\Query;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $QueryId
 * @property list<Shapes\QueryResultItem>|null $ResultItems
 * @property list<Shapes\FacetResult>|null $FacetResults
 * @property int|null $TotalNumberOfResults
 * @property list<Shapes\Warning>|null $Warnings
 * @property list<Shapes\SpellCorrectedQuery>|null $SpellCorrectedQueries
 * @property list<Shapes\FeaturedResultsItem>|null $FeaturedResultsItems
 */
class QueryResponse extends Response
{
}
