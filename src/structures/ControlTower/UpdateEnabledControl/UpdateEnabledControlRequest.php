<?php

namespace Sunaoka\Aws\Structures\ControlTower\UpdateEnabledControl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\EnabledControlParameter> $parameters
 * @property string $enabledControlIdentifier
 */
class UpdateEnabledControlRequest extends Request
{
    /**
     * @param array{
     *     parameters: list<Shapes\EnabledControlParameter>,
     *     enabledControlIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
