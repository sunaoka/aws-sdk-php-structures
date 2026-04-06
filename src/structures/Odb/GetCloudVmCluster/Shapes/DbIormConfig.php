<?php

namespace Sunaoka\Aws\Structures\Odb\GetCloudVmCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $dbName
 * @property string|null $flashCacheLimit
 * @property int|null $share
 */
class DbIormConfig extends Shape
{
    /**
     * @param array{
     *     dbName?: string|null,
     *     flashCacheLimit?: string|null,
     *     share?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
