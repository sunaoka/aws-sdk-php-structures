<?php

namespace Sunaoka\Aws\Structures\DataZone\ListAccountPools\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $domainId
 * @property string|null $id
 * @property string|null $name
 * @property 'MANUAL'|null $resolutionStrategy
 * @property string|null $domainUnitId
 * @property string|null $createdBy
 * @property string|null $updatedBy
 */
class AccountPoolSummary extends Shape
{
    /**
     * @param array{
     *     domainId?: string|null,
     *     id?: string|null,
     *     name?: string|null,
     *     resolutionStrategy?: 'MANUAL'|null,
     *     domainUnitId?: string|null,
     *     createdBy?: string|null,
     *     updatedBy?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
