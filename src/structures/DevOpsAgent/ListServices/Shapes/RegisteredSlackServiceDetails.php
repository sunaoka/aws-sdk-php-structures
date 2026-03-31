<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\ListServices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $teamId
 * @property string $teamName
 */
class RegisteredSlackServiceDetails extends Shape
{
    /**
     * @param array{
     *     teamId: string,
     *     teamName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
