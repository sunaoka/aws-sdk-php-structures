<?php

namespace Sunaoka\Aws\Structures\AppRunner\UpdateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $RuntimeEnvironmentVariables
 * @property string|null $StartCommand
 * @property string|null $Port
 * @property array<string, string>|null $RuntimeEnvironmentSecrets
 */
class ImageConfiguration extends Shape
{
    /**
     * @param array{
     *     RuntimeEnvironmentVariables?: array<string, string>|null,
     *     StartCommand?: string|null,
     *     Port?: string|null,
     *     RuntimeEnvironmentSecrets?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
