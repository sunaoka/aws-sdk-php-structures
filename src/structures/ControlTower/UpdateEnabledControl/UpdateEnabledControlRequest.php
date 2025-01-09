<?php

namespace Sunaoka\Aws\Structures\ControlTower\UpdateEnabledControl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $enabledControlIdentifier
 * @property list<Shapes\EnabledControlParameter> $parameters
 */
class UpdateEnabledControlRequest extends Request
{
    /**
     * @param array{
     *     enabledControlIdentifier: string,
     *     parameters: list<Shapes\EnabledControlParameter>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
