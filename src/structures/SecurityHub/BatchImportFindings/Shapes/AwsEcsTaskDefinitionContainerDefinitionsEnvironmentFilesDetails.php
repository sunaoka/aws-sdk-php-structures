<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Type
 * @property string $Value
 */
class AwsEcsTaskDefinitionContainerDefinitionsEnvironmentFilesDetails extends Shape
{
    /**
     * @param array{
     *     Type?: string,
     *     Value?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
