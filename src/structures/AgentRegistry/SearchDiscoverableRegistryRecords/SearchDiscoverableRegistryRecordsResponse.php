<?php

namespace Sunaoka\Aws\Structures\AgentRegistry\SearchDiscoverableRegistryRecords;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\RegistryRecordSummary> $registryRecords
 * @property 'HYBRID'|'SEMANTIC'|'KEYWORD'|null $searchType
 * @property string|null $nextToken
 */
class SearchDiscoverableRegistryRecordsResponse extends Response
{
}
