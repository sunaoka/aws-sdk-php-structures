<?php

namespace Sunaoka\Aws\Structures\Lambda\PublishVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CapacityProviderArn
 * @property int<1, 1600>|null $PerExecutionEnvironmentMaxConcurrency
 * @property double|null $ExecutionEnvironmentMemoryGiBPerVCpu
 */
class LambdaManagedInstancesCapacityProviderConfig extends Shape
{
    /**
     * @param array{
     *     CapacityProviderArn: string,
     *     PerExecutionEnvironmentMaxConcurrency?: int<1, 1600>|null,
     *     ExecutionEnvironmentMemoryGiBPerVCpu?: double|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
