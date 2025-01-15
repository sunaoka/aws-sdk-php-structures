<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Type
 * @property string|null $Value
 */
class AwsEcsTaskDefinitionContainerDefinitionsResourceRequirementsDetails extends Shape
{
    /**
     * @param array{
     *     Type?: string|null,
     *     Value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
