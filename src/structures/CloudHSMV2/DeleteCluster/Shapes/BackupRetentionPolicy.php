<?php

namespace Sunaoka\Aws\Structures\CloudHSMV2\DeleteCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DAYS'|null $Type
 * @property string|null $Value
 */
class BackupRetentionPolicy extends Shape
{
    /**
     * @param array{
     *     Type?: 'DAYS'|null,
     *     Value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
