<?php

namespace Sunaoka\Aws\Structures\QBusiness\AssociatePermission\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'StringEquals' $conditionOperator
 * @property string $conditionKey
 * @property list<string> $conditionValues
 */
class PermissionCondition extends Shape
{
    /**
     * @param array{
     *     conditionOperator: 'StringEquals',
     *     conditionKey: string,
     *     conditionValues: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
