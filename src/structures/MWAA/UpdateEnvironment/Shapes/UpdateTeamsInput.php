<?php

namespace Sunaoka\Aws\Structures\MWAA\UpdateEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, TeamConfig>|null $AddOrUpdate
 * @property list<string>|null $Remove
 */
class UpdateTeamsInput extends Shape
{
    /**
     * @param array{
     *     AddOrUpdate?: array<string, TeamConfig>|null,
     *     Remove?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
