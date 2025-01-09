<?php

namespace Sunaoka\Aws\Structures\AppRunner\DescribeService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $RuntimeEnvironmentVariables
 * @property string $StartCommand
 * @property string $Port
 * @property array<string, string> $RuntimeEnvironmentSecrets
 */
class ImageConfiguration extends Shape
{
    /**
     * @param array{
     *     RuntimeEnvironmentVariables?: array<string, string>,
     *     StartCommand?: string,
     *     Port?: string,
     *     RuntimeEnvironmentSecrets?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
