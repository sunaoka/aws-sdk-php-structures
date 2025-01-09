<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeLocationSmb\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AUTOMATIC'|'SMB2'|'SMB3'|'SMB1'|'SMB2_0' $Version
 */
class SmbMountOptions extends Shape
{
    /**
     * @param array{Version?: 'AUTOMATIC'|'SMB2'|'SMB3'|'SMB1'|'SMB2_0'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
