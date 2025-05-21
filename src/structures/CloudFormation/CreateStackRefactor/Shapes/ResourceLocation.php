<?php

namespace Sunaoka\Aws\Structures\CloudFormation\CreateStackRefactor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StackName
 * @property string $LogicalResourceId
 */
class ResourceLocation extends Shape
{
    /**
     * @param array{
     *     StackName: string,
     *     LogicalResourceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
