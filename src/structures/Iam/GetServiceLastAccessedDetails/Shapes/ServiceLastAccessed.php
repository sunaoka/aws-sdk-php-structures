<?php

namespace Sunaoka\Aws\Structures\Iam\GetServiceLastAccessedDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ServiceName
 * @property \Aws\Api\DateTimeResult|null $LastAuthenticated
 * @property string $ServiceNamespace
 * @property string|null $LastAuthenticatedEntity
 * @property string|null $LastAuthenticatedRegion
 * @property int|null $TotalAuthenticatedEntities
 * @property list<TrackedActionLastAccessed>|null $TrackedActionsLastAccessed
 */
class ServiceLastAccessed extends Shape
{
    /**
     * @param array{
     *     ServiceName: string,
     *     LastAuthenticated?: \Aws\Api\DateTimeResult|null,
     *     ServiceNamespace: string,
     *     LastAuthenticatedEntity?: string|null,
     *     LastAuthenticatedRegion?: string|null,
     *     TotalAuthenticatedEntities?: int|null,
     *     TrackedActionsLastAccessed?: list<TrackedActionLastAccessed>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
