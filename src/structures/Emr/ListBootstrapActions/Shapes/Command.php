<?php

namespace Sunaoka\Aws\Structures\Emr\ListBootstrapActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $ScriptPath
 * @property list<string> $Args
 */
class Command extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     ScriptPath?: string,
     *     Args?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
