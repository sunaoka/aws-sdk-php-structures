<?php

namespace Sunaoka\Aws\Structures\OSIS\StopPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $SubnetIds
 * @property list<string>|null $SecurityGroupIds
 */
class VpcOptions extends Shape
{
    /**
     * @param array{
     *     SubnetIds: list<string>,
     *     SecurityGroupIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
