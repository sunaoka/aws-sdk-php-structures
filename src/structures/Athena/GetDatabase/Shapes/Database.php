<?php

namespace Sunaoka\Aws\Structures\Athena\GetDatabase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string|null $Description
 * @property array<string, string>|null $Parameters
 */
class Database extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     Parameters?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
