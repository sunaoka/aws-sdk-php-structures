<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\ListRegistryRecords;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $registryId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property list<Shapes\RegistryRecordFilter>|null $filters
 */
class ListRegistryRecordsRequest extends Request
{
    /**
     * @param array{
     *     registryId: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     filters?: list<Shapes\RegistryRecordFilter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
