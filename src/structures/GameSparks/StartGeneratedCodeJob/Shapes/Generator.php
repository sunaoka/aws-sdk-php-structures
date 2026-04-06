<?php

namespace Sunaoka\Aws\Structures\GameSparks\StartGeneratedCodeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $GameSdkVersion
 * @property string|null $Language
 * @property string|null $TargetPlatform
 */
class Generator extends Shape
{
    /**
     * @param array{
     *     GameSdkVersion?: string|null,
     *     Language?: string|null,
     *     TargetPlatform?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
