<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $SecurityGroupIds
 * @property list<string> $SubnetIds
 */
class InputVpcRequest extends Shape
{
    /**
     * @param array{
     *     SecurityGroupIds?: list<string>,
     *     SubnetIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
