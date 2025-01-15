<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Base
 * @property string|null $CapacityProvider
 * @property int|null $Weight
 */
class AwsEcsClusterDefaultCapacityProviderStrategyDetails extends Shape
{
    /**
     * @param array{
     *     Base?: int|null,
     *     CapacityProvider?: string|null,
     *     Weight?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
