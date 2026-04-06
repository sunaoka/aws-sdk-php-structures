<?php

namespace Sunaoka\Aws\Structures\GameSparks\GetStage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property \Aws\Api\DateTimeResult|null $Created
 * @property string|null $Description
 * @property string|null $GameKey
 * @property \Aws\Api\DateTimeResult|null $LastUpdated
 * @property string|null $LogGroup
 * @property string|null $Name
 * @property string|null $Role
 * @property 'ACTIVE'|'DELETING'|null $State
 * @property array<string, string>|null $Tags
 */
class StageDetails extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Created?: \Aws\Api\DateTimeResult|null,
     *     Description?: string|null,
     *     GameKey?: string|null,
     *     LastUpdated?: \Aws\Api\DateTimeResult|null,
     *     LogGroup?: string|null,
     *     Name?: string|null,
     *     Role?: string|null,
     *     State?: 'ACTIVE'|'DELETING'|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
