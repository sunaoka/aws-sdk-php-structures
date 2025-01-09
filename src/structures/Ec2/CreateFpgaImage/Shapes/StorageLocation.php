<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateFpgaImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Bucket
 * @property string $Key
 */
class StorageLocation extends Shape
{
    /**
     * @param array{
     *     Bucket?: string,
     *     Key?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
