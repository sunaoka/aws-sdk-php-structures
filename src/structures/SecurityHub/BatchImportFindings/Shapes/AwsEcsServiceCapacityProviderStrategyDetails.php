<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Base
 * @property string|null $CapacityProvider
 * @property int|null $Weight
 */
class AwsEcsServiceCapacityProviderStrategyDetails extends Shape
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
