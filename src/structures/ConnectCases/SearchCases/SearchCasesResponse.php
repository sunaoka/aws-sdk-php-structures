<?php

namespace Sunaoka\Aws\Structures\ConnectCases\SearchCases;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $nextToken
 * @property list<Shapes\SearchCasesResponseItem> $cases
 * @property int<0, max>|null $totalCount
 */
class SearchCasesResponse extends Response
{
}
