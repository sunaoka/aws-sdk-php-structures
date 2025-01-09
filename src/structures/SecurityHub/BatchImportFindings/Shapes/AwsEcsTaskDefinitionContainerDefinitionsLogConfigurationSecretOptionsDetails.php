<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $ValueFrom
 */
class AwsEcsTaskDefinitionContainerDefinitionsLogConfigurationSecretOptionsDetails extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     ValueFrom?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
