<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Namespace
 * @property string|null $Value
 */
class AwsEcsTaskDefinitionContainerDefinitionsSystemControlsDetails extends Shape
{
    /**
     * @param array{
     *     Namespace?: string|null,
     *     Value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
