<?php

namespace Sunaoka\Aws\Structures\ControlTower\EnableControl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $controlIdentifier
 * @property list<Shapes\EnabledControlParameter> $parameters
 * @property array<string, string> $tags
 * @property string $targetIdentifier
 */
class EnableControlRequest extends Request
{
    /**
     * @param array{
     *     controlIdentifier: string,
     *     parameters?: list<Shapes\EnabledControlParameter>,
     *     tags?: array<string, string>,
     *     targetIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
