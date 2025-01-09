<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Base
 * @property string $CapacityProvider
 * @property int $Weight
 */
class AwsEcsServiceCapacityProviderStrategyDetails extends Shape
{
    /**
     * @param array{
     *     Base?: int,
     *     CapacityProvider?: string,
     *     Weight?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
