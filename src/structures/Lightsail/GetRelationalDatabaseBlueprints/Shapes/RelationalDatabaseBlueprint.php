<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetRelationalDatabaseBlueprints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $blueprintId
 * @property 'mysql' $engine
 * @property string $engineVersion
 * @property string $engineDescription
 * @property string $engineVersionDescription
 * @property bool $isEngineDefault
 */
class RelationalDatabaseBlueprint extends Shape
{
    /**
     * @param array{
     *     blueprintId?: string,
     *     engine?: 'mysql',
     *     engineVersion?: string,
     *     engineDescription?: string,
     *     engineVersionDescription?: string,
     *     isEngineDefault?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
