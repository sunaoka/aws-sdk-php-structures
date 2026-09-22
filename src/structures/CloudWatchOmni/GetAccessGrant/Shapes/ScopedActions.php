<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\GetAccessGrant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $actions
 * @property list<ResourceScope>|null $resources
 * @property array<string, list<string>>|null $contextConditions
 */
class ScopedActions extends Shape
{
    /**
     * @param array{
     *     actions: list<string>,
     *     resources?: list<ResourceScope>|null,
     *     contextConditions?: array<string, list<string>>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
