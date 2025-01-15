<?php

namespace Sunaoka\Aws\Structures\EMRContainers\ListManagedEndpoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $virtualClusterId
 * @property \Aws\Api\DateTimeResult|null $createdBefore
 * @property \Aws\Api\DateTimeResult|null $createdAfter
 * @property list<string>|null $types
 * @property list<'CREATING'|'ACTIVE'|'TERMINATING'|'TERMINATED'|'TERMINATED_WITH_ERRORS'>|null $states
 * @property int|null $maxResults
 * @property string|null $nextToken
 */
class ListManagedEndpointsRequest extends Request
{
    /**
     * @param array{
     *     virtualClusterId: string,
     *     createdBefore?: \Aws\Api\DateTimeResult|null,
     *     createdAfter?: \Aws\Api\DateTimeResult|null,
     *     types?: list<string>|null,
     *     states?: list<'CREATING'|'ACTIVE'|'TERMINATING'|'TERMINATED'|'TERMINATED_WITH_ERRORS'>|null,
     *     maxResults?: int|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
