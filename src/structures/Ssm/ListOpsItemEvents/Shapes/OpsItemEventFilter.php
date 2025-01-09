<?php

namespace Sunaoka\Aws\Structures\Ssm\ListOpsItemEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OpsItemId' $Key
 * @property list<string> $Values
 * @property 'Equal' $Operator
 */
class OpsItemEventFilter extends Shape
{
    /**
     * @param array{
     *     Key: 'OpsItemId',
     *     Values: list<string>,
     *     Operator: 'Equal'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
