<?php

namespace Sunaoka\Aws\Structures\MQ\DescribeBroker\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataReplicationCounterpart $DataReplicationCounterpart
 * @property string $DataReplicationRole
 */
class DataReplicationMetadataOutput extends Shape
{
    /**
     * @param array{
     *     DataReplicationCounterpart?: DataReplicationCounterpart,
     *     DataReplicationRole: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
