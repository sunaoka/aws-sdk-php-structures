<?php

namespace Sunaoka\Aws\Structures\Ssm\GetParametersByPath\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Key
 * @property string|null $Option
 * @property list<string>|null $Values
 */
class ParameterStringFilter extends Shape
{
    /**
     * @param array{
     *     Key: string,
     *     Option?: string|null,
     *     Values?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
