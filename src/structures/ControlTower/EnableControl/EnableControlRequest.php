<?php

namespace Sunaoka\Aws\Structures\ControlTower\EnableControl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $controlIdentifier
 * @property list<Shapes\EnabledControlParameter>|null $parameters
 * @property array<string, string>|null $tags
 * @property string $targetIdentifier
 */
class EnableControlRequest extends Request
{
    /**
     * @param array{
     *     controlIdentifier: string,
     *     parameters?: list<Shapes\EnabledControlParameter>|null,
     *     tags?: array<string, string>|null,
     *     targetIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
