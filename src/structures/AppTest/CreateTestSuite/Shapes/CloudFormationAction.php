<?php

namespace Sunaoka\Aws\Structures\AppTest\CreateTestSuite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $resource
 * @property 'Create'|'Delete' $actionType
 */
class CloudFormationAction extends Shape
{
    /**
     * @param array{
     *     resource: string,
     *     actionType?: 'Create'|'Delete'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
