<?php

namespace Sunaoka\Aws\Structures\GameSparks\CreateGame\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property \Aws\Api\DateTimeResult|null $Created
 * @property string|null $Description
 * @property bool|null $EnableTerminationProtection
 * @property \Aws\Api\DateTimeResult|null $LastUpdated
 * @property string|null $Name
 * @property 'ACTIVE'|'DELETING'|null $State
 * @property array<string, string>|null $Tags
 */
class GameDetails extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Created?: \Aws\Api\DateTimeResult|null,
     *     Description?: string|null,
     *     EnableTerminationProtection?: bool|null,
     *     LastUpdated?: \Aws\Api\DateTimeResult|null,
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
