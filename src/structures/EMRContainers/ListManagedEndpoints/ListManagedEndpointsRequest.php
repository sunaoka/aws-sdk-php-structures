<?php

namespace Sunaoka\Aws\Structures\EMRContainers\ListManagedEndpoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $virtualClusterId
 * @property \Aws\Api\DateTimeResult $createdBefore
 * @property \Aws\Api\DateTimeResult $createdAfter
 * @property list<string> $types
 * @property list<'CREATING'|'ACTIVE'|'TERMINATING'|'TERMINATED'|'TERMINATED_WITH_ERRORS'> $states
 * @property int $maxResults
 * @property string $nextToken
 */
class ListManagedEndpointsRequest extends Request
{
    /**
     * @param array{
     *     virtualClusterId: string,
     *     createdBefore?: \Aws\Api\DateTimeResult,
     *     createdAfter?: \Aws\Api\DateTimeResult,
     *     types?: list<string>,
     *     states?: list<'CREATING'|'ACTIVE'|'TERMINATING'|'TERMINATED'|'TERMINATED_WITH_ERRORS'>,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
