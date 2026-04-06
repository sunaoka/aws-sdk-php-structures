<?php

namespace Sunaoka\Aws\Structures\GameSparks\ListStages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property string|null $GameKey
 * @property string|null $Name
 * @property 'ACTIVE'|'DELETING'|null $State
 * @property array<string, string>|null $Tags
 */
class StageSummary extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     GameKey?: string|null,
     *     Name?: string|null,
     *     State?: 'ACTIVE'|'DELETING'|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
