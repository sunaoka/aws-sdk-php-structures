<?php

namespace Sunaoka\Aws\Structures\AppRegistry\GetAssociatedResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IN_PROGRESS'|'SUCCESS'|'FAILURE' $applicationTagStatus
 * @property string $errorMessage
 * @property list<ResourcesListItem> $resources
 * @property string $nextToken
 */
class ApplicationTagResult extends Shape
{
    /**
     * @param array{
     *     applicationTagStatus?: 'IN_PROGRESS'|'SUCCESS'|'FAILURE',
     *     errorMessage?: string,
     *     resources?: list<ResourcesListItem>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
