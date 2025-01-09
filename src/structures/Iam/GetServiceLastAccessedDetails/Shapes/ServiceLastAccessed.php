<?php

namespace Sunaoka\Aws\Structures\Iam\GetServiceLastAccessedDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ServiceName
 * @property \Aws\Api\DateTimeResult $LastAuthenticated
 * @property string $ServiceNamespace
 * @property string $LastAuthenticatedEntity
 * @property string $LastAuthenticatedRegion
 * @property int $TotalAuthenticatedEntities
 * @property list<TrackedActionLastAccessed> $TrackedActionsLastAccessed
 */
class ServiceLastAccessed extends Shape
{
    /**
     * @param array{
     *     ServiceName: string,
     *     LastAuthenticated?: \Aws\Api\DateTimeResult,
     *     ServiceNamespace: string,
     *     LastAuthenticatedEntity?: string,
     *     LastAuthenticatedRegion?: string,
     *     TotalAuthenticatedEntities?: int,
     *     TrackedActionsLastAccessed?: list<TrackedActionLastAccessed>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
