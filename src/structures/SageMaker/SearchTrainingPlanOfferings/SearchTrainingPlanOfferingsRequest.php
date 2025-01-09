<?php

namespace Sunaoka\Aws\Structures\SageMaker\SearchTrainingPlanOfferings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ml.p4d.24xlarge'|'ml.p5.48xlarge'|'ml.p5e.48xlarge'|'ml.p5en.48xlarge'|'ml.trn2.48xlarge' $InstanceType
 * @property int $InstanceCount
 * @property \Aws\Api\DateTimeResult $StartTimeAfter
 * @property \Aws\Api\DateTimeResult $EndTimeBefore
 * @property int $DurationHours
 * @property list<'training-job'|'hyperpod-cluster'> $TargetResources
 */
class SearchTrainingPlanOfferingsRequest extends Request
{
    /**
     * @param array{
     *     InstanceType: 'ml.p4d.24xlarge'|'ml.p5.48xlarge'|'ml.p5e.48xlarge'|'ml.p5en.48xlarge'|'ml.trn2.48xlarge',
     *     InstanceCount: int,
     *     StartTimeAfter?: \Aws\Api\DateTimeResult,
     *     EndTimeBefore?: \Aws\Api\DateTimeResult,
     *     DurationHours?: int,
     *     TargetResources: list<'training-job'|'hyperpod-cluster'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
