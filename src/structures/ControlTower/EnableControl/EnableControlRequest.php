<?php

namespace Sunaoka\Aws\Structures\ControlTower\EnableControl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $controlIdentifier
 * @property string $targetIdentifier
 * @property array<string, string>|null $tags
 * @property list<Shapes\EnabledControlParameter>|null $parameters
 */
class EnableControlRequest extends Request
{
    /**
     * @param array{
     *     controlIdentifier: string,
     *     targetIdentifier: string,
     *     tags?: array<string, string>|null,
     *     parameters?: list<Shapes\EnabledControlParameter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
