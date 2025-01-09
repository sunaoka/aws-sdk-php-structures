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
 * @property int<1, 9> $NumberOfHumanWorkersPerDataObject
 * @property int<30, max> $TaskTimeLimitInSeconds
 * @property int<60, max> $TaskAvailabilityLifetimeInSeconds
 * @property int<1, 5000> $MaxConcurrentTaskCount
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
     *     NumberOfHumanWorkersPerDataObject: int<1, 9>,
     *     TaskTimeLimitInSeconds: int<30, max>,
     *     TaskAvailabilityLifetimeInSeconds?: int<60, max>,
     *     MaxConcurrentTaskCount?: int<1, 5000>,
     *     AnnotationConsolidationConfig?: AnnotationConsolidationConfig,
     *     PublicWorkforceTaskPrice?: PublicWorkforceTaskPrice
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
