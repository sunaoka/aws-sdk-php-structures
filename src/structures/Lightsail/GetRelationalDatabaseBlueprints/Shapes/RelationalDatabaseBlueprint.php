<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetRelationalDatabaseBlueprints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $blueprintId
 * @property 'mysql'|null $engine
 * @property string|null $engineVersion
 * @property string|null $engineDescription
 * @property string|null $engineVersionDescription
 * @property bool|null $isEngineDefault
 */
class RelationalDatabaseBlueprint extends Shape
{
    /**
     * @param array{
     *     blueprintId?: string|null,
     *     engine?: 'mysql'|null,
     *     engineVersion?: string|null,
     *     engineDescription?: string|null,
     *     engineVersionDescription?: string|null,
     *     isEngineDefault?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
