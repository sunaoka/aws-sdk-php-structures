<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $HardLimit
 * @property string $Name
 * @property int $SoftLimit
 */
class AwsEcsTaskDefinitionContainerDefinitionsUlimitsDetails extends Shape
{
    /**
     * @param array{
     *     HardLimit?: int,
     *     Name?: string,
     *     SoftLimit?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
