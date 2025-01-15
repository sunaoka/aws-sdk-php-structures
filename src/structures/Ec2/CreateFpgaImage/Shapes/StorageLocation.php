<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateFpgaImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Bucket
 * @property string|null $Key
 */
class StorageLocation extends Shape
{
    /**
     * @param array{
     *     Bucket?: string|null,
     *     Key?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
