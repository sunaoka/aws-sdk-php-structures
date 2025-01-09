<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeLabelingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WorkteamArn
 * @property UiConfig $UiConfig
 * @property string $PreHumanTaskLambdaArn
 * @property list<string> $TaskKeywords
 * @property string $TaskTitle
 * @property string $TaskDescription
 * @property int $NumberOfHumanWorkersPerDataObject
 * @property int $TaskTimeLimitInSeconds
 * @property int $TaskAvailabilityLifetimeInSeconds
 * @property int $MaxConcurrentTaskCount
 * @property AnnotationConsolidationConfig $AnnotationConsolidationConfig
 * @property PublicWorkforceTaskPrice $PublicWorkforceTaskPrice
 */
class HumanTaskConfig extends Shape
{
    /**
     * @param array{
     *     WorkteamArn: string,
     *     UiConfig: UiConfig,
     *     PreHumanTaskLambdaArn?: string,
     *     TaskKeywords?: list<string>,
     *     TaskTitle: string,
     *     TaskDescription: string,
     *     NumberOfHumanWorkersPerDataObject: int,
     *     TaskTimeLimitInSeconds: int,
     *     TaskAvailabilityLifetimeInSeconds?: int,
     *     MaxConcurrentTaskCount?: int,
     *     AnnotationConsolidationConfig?: AnnotationConsolidationConfig,
     *     PublicWorkforceTaskPrice?: PublicWorkforceTaskPrice
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
