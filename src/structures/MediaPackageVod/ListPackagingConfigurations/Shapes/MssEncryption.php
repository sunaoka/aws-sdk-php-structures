<?php

namespace Sunaoka\Aws\Structures\MediaPackageVod\ListPackagingConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SpekeKeyProvider $SpekeKeyProvider
 */
class MssEncryption extends Shape
{
    /**
     * @param array{SpekeKeyProvider: SpekeKeyProvider} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
