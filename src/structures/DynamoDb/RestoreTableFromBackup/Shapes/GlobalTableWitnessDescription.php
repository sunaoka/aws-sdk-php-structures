<?php

namespace Sunaoka\Aws\Structures\DynamoDb\RestoreTableFromBackup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RegionName
 * @property 'CREATING'|'DELETING'|'ACTIVE'|null $WitnessStatus
 */
class GlobalTableWitnessDescription extends Shape
{
    /**
     * @param array{
     *     RegionName?: string|null,
     *     WitnessStatus?: 'CREATING'|'DELETING'|'ACTIVE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
