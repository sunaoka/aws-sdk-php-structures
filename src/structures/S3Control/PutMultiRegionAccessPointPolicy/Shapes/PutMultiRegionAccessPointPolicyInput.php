<?php

namespace Sunaoka\Aws\Structures\S3Control\PutMultiRegionAccessPointPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Policy
 */
class PutMultiRegionAccessPointPolicyInput extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Policy: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
