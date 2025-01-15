<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $ValueFrom
 */
class AwsEcsTaskDefinitionContainerDefinitionsSecretsDetails extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     ValueFrom?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
