<?php

namespace Sunaoka\Aws\Structures\MediaPackageVod\DescribePackagingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConstantInitializationVector
 * @property SpekeKeyProvider $SpekeKeyProvider
 */
class CmafEncryption extends Shape
{
    /**
     * @param array{
     *     ConstantInitializationVector?: string,
     *     SpekeKeyProvider: SpekeKeyProvider
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
