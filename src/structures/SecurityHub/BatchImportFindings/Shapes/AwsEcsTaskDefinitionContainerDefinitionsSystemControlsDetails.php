<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Namespace
 * @property string $Value
 */
class AwsEcsTaskDefinitionContainerDefinitionsSystemControlsDetails extends Shape
{
    /**
     * @param array{
     *     Namespace?: string,
     *     Value?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
