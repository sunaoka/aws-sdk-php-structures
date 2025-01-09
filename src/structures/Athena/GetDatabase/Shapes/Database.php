<?php

namespace Sunaoka\Aws\Structures\Athena\GetDatabase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Description
 * @property array<string, string> $Parameters
 */
class Database extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string,
     *     Parameters?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
