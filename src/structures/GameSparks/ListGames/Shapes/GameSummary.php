<?php

namespace Sunaoka\Aws\Structures\GameSparks\ListGames\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property string|null $Name
 * @property 'ACTIVE'|'DELETING'|null $State
 * @property array<string, string>|null $Tags
 */
class GameSummary extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
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
