<?php

namespace Sunaoka\Aws\Structures\SageMakerTrainingSessionRuntime\ExecuteTrainingOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'cross_entropy'|'importance_sampling'|'ppo'|'cispo' $lossFnName
 * @property list<Datum> $datumList
 * @property Document|null $lossFnConfig
 */
class ForwardBackwardConfig extends Shape
{
    /**
     * @param array{
     *     lossFnName: 'cross_entropy'|'importance_sampling'|'ppo'|'cispo',
     *     datumList: list<Datum>,
     *     lossFnConfig?: Document|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
