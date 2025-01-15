<?php

namespace Sunaoka\Aws\Structures\ControlTower\ListControlOperations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $controlIdentifiers
 * @property list<'ENABLE_CONTROL'|'DISABLE_CONTROL'|'UPDATE_ENABLED_CONTROL'|'RESET_ENABLED_CONTROL'>|null $controlOperationTypes
 * @property list<string>|null $enabledControlIdentifiers
 * @property list<'SUCCEEDED'|'FAILED'|'IN_PROGRESS'>|null $statuses
 * @property list<string>|null $targetIdentifiers
 */
class ControlOperationFilter extends Shape
{
    /**
     * @param array{
     *     controlIdentifiers?: list<string>|null,
     *     controlOperationTypes?: list<'ENABLE_CONTROL'|'DISABLE_CONTROL'|'UPDATE_ENABLED_CONTROL'|'RESET_ENABLED_CONTROL'>|null,
     *     enabledControlIdentifiers?: list<string>|null,
     *     statuses?: list<'SUCCEEDED'|'FAILED'|'IN_PROGRESS'>|null,
     *     targetIdentifiers?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
