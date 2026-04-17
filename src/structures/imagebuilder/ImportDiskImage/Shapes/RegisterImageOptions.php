<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ImportDiskImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $secureBootEnabled
 * @property string|null $uefiData
 */
class RegisterImageOptions extends Shape
{
    /**
     * @param array{
     *     secureBootEnabled?: bool|null,
     *     uefiData?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
