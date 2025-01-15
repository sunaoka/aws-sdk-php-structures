<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Condition
 * @property string|null $ContainerName
 */
class AwsEcsTaskDefinitionContainerDefinitionsDependsOnDetails extends Shape
{
    /**
     * @param array{
     *     Condition?: string|null,
     *     ContainerName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
