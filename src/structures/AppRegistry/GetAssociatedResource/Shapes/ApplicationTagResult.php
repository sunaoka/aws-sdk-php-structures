<?php

namespace Sunaoka\Aws\Structures\AppRegistry\GetAssociatedResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IN_PROGRESS'|'SUCCESS'|'FAILURE'|null $applicationTagStatus
 * @property string|null $errorMessage
 * @property list<ResourcesListItem>|null $resources
 * @property string|null $nextToken
 */
class ApplicationTagResult extends Shape
{
    /**
     * @param array{
     *     applicationTagStatus?: 'IN_PROGRESS'|'SUCCESS'|'FAILURE'|null,
     *     errorMessage?: string|null,
     *     resources?: list<ResourcesListItem>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
