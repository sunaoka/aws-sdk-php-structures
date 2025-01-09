<?php

namespace Sunaoka\Aws\Structures\CloudFormation\CreateStack\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Type
 */
class RollbackTrigger extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     Type: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
