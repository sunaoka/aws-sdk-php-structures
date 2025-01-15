<?php

namespace Sunaoka\Aws\Structures\MQ\UpdateBroker\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataReplicationCounterpart|null $DataReplicationCounterpart
 * @property string $DataReplicationRole
 */
class DataReplicationMetadataOutput extends Shape
{
    /**
     * @param array{
     *     DataReplicationCounterpart?: DataReplicationCounterpart|null,
     *     DataReplicationRole: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
