<?php

namespace Sunaoka\Aws\Structures\ControlTower\ListControlOperations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $controlIdentifiers
 * @property list<'ENABLE_CONTROL'|'DISABLE_CONTROL'|'UPDATE_ENABLED_CONTROL'|'RESET_ENABLED_CONTROL'> $controlOperationTypes
 * @property list<string> $enabledControlIdentifiers
 * @property list<'SUCCEEDED'|'FAILED'|'IN_PROGRESS'> $statuses
 * @property list<string> $targetIdentifiers
 */
class ControlOperationFilter extends Shape
{
    /**
     * @param array{
     *     controlIdentifiers?: list<string>,
     *     controlOperationTypes?: list<'ENABLE_CONTROL'|'DISABLE_CONTROL'|'UPDATE_ENABLED_CONTROL'|'RESET_ENABLED_CONTROL'>,
     *     enabledControlIdentifiers?: list<string>,
     *     statuses?: list<'SUCCEEDED'|'FAILED'|'IN_PROGRESS'>,
     *     targetIdentifiers?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
