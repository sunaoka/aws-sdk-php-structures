<?php

namespace Sunaoka\Aws\Structures\SageMaker\SearchTrainingPlanOfferings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ml.p4d.24xlarge'|'ml.p5.48xlarge'|'ml.p5e.48xlarge'|'ml.p5en.48xlarge'|'ml.trn2.48xlarge' $InstanceType
 * @property int<1, 256> $InstanceCount
 * @property \Aws\Api\DateTimeResult|null $StartTimeAfter
 * @property \Aws\Api\DateTimeResult|null $EndTimeBefore
 * @property int<1, 87600>|null $DurationHours
 * @property list<'training-job'|'hyperpod-cluster'> $TargetResources
 */
class SearchTrainingPlanOfferingsRequest extends Request
{
    /**
     * @param array{
     *     InstanceType: 'ml.p4d.24xlarge'|'ml.p5.48xlarge'|'ml.p5e.48xlarge'|'ml.p5en.48xlarge'|'ml.trn2.48xlarge',
     *     InstanceCount: int<1, 256>,
     *     StartTimeAfter?: \Aws\Api\DateTimeResult|null,
     *     EndTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     DurationHours?: int<1, 87600>|null,
     *     TargetResources: list<'training-job'|'hyperpod-cluster'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
