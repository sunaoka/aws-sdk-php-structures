<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CidrBlock
 */
class VpcInfoCidrBlockSetDetails extends Shape
{
    /**
     * @param array{CidrBlock?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
