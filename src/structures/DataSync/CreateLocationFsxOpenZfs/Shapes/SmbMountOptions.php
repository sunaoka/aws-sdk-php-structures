<?php

namespace Sunaoka\Aws\Structures\DataSync\CreateLocationFsxOpenZfs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AUTOMATIC'|'SMB2'|'SMB3'|'SMB1'|'SMB2_0'|null $Version
 */
class SmbMountOptions extends Shape
{
    /**
     * @param array{Version?: 'AUTOMATIC'|'SMB2'|'SMB3'|'SMB1'|'SMB2_0'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
