<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\UpdateOriginEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float $TimeOffset
 * @property bool|null $Precise
 */
class StartTag extends Shape
{
    /**
     * @param array{
     *     TimeOffset: float,
     *     Precise?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
