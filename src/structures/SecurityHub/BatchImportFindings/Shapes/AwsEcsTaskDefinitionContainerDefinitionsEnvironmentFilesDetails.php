<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Type
 * @property string|null $Value
 */
class AwsEcsTaskDefinitionContainerDefinitionsEnvironmentFilesDetails extends Shape
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
