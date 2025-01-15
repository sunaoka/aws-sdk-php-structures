<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestSuite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $resource
 * @property 'Create'|'Delete'|null $actionType
 */
class CloudFormationAction extends Shape
{
    /**
     * @param array{
     *     resource: string,
     *     actionType?: 'Create'|'Delete'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
