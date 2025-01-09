<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Condition
 * @property string $ContainerName
 */
class AwsEcsTaskDefinitionContainerDefinitionsDependsOnDetails extends Shape
{
    /**
     * @param array{
     *     Condition?: string,
     *     ContainerName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
