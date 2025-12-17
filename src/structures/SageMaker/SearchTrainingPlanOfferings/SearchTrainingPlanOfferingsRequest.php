<?php

namespace Sunaoka\Aws\Structures\SageMaker\SearchTrainingPlanOfferings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ml.p4d.24xlarge'|'ml.p5.48xlarge'|'ml.p5e.48xlarge'|'ml.p5en.48xlarge'|'ml.trn1.32xlarge'|'ml.trn2.48xlarge'|'ml.p6-b200.48xlarge'|'ml.p4de.24xlarge'|'ml.p6e-gb200.36xlarge'|'ml.p5.4xlarge'|'ml.p6-b300.48xlarge'|null $InstanceType
 * @property int<0, 256>|null $InstanceCount
 * @property string|null $UltraServerType
 * @property int<1, max>|null $UltraServerCount
 * @property \Aws\Api\DateTimeResult|null $StartTimeAfter
 * @property \Aws\Api\DateTimeResult|null $EndTimeBefore
 * @property int<1, 87600> $DurationHours
 * @property list<'training-job'|'hyperpod-cluster'|'endpoint'> $TargetResources
 */
class SearchTrainingPlanOfferingsRequest extends Request
{
    /**
     * @param array{
     *     InstanceType?: 'ml.p4d.24xlarge'|'ml.p5.48xlarge'|'ml.p5e.48xlarge'|'ml.p5en.48xlarge'|'ml.trn1.32xlarge'|'ml.trn2.48xlarge'|'ml.p6-b200.48xlarge'|'ml.p4de.24xlarge'|'ml.p6e-gb200.36xlarge'|'ml.p5.4xlarge'|'ml.p6-b300.48xlarge'|null,
     *     InstanceCount?: int<0, 256>|null,
     *     UltraServerType?: string|null,
     *     UltraServerCount?: int<1, max>|null,
     *     StartTimeAfter?: \Aws\Api\DateTimeResult|null,
     *     EndTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     DurationHours: int<1, 87600>,
     *     TargetResources: list<'training-job'|'hyperpod-cluster'|'endpoint'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
