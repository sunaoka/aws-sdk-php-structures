<?php

namespace Sunaoka\Aws\Structures\CloudHSMV2\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DAYS' $Type
 * @property string $Value
 */
class BackupRetentionPolicy extends Shape
{
    /**
     * @param array{
     *     Type?: 'DAYS',
     *     Value?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
