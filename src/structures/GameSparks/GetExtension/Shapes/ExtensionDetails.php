<?php

namespace Sunaoka\Aws\Structures\GameSparks\GetExtension\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property string|null $Name
 * @property string|null $Namespace
 */
class ExtensionDetails extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     Name?: string|null,
     *     Namespace?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
