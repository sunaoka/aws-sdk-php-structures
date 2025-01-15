<?php

namespace Sunaoka\Aws\Structures\Emr\ListBootstrapActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $ScriptPath
 * @property list<string>|null $Args
 */
class Command extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     ScriptPath?: string|null,
     *     Args?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
