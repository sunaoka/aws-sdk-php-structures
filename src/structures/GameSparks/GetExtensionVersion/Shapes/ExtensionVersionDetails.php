<?php

namespace Sunaoka\Aws\Structures\GameSparks\GetExtensionVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Namespace
 * @property string|null $Schema
 * @property string|null $Version
 */
class ExtensionVersionDetails extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Namespace?: string|null,
     *     Schema?: string|null,
     *     Version?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
