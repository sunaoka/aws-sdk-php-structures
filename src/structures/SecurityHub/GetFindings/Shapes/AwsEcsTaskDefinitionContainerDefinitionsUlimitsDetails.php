<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $HardLimit
 * @property string|null $Name
 * @property int|null $SoftLimit
 */
class AwsEcsTaskDefinitionContainerDefinitionsUlimitsDetails extends Shape
{
    /**
     * @param array{
     *     HardLimit?: int|null,
     *     Name?: string|null,
     *     SoftLimit?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
