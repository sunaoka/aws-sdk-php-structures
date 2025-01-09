<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\GetOriginEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float $TimeOffset
 * @property bool $Precise
 */
class StartTag extends Shape
{
    /**
     * @param array{
     *     TimeOffset: float,
     *     Precise?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
