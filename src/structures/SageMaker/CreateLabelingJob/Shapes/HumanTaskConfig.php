<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateLabelingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WorkteamArn
 * @property UiConfig $UiConfig
 * @property string|null $PreHumanTaskLambdaArn
 * @property list<string>|null $TaskKeywords
 * @property string $TaskTitle
 * @property string $TaskDescription
 * @property int<1, 9> $NumberOfHumanWorkersPerDataObject
 * @property int<30, max> $TaskTimeLimitInSeconds
 * @property int<60, max>|null $TaskAvailabilityLifetimeInSeconds
 * @property int<1, 5000>|null $MaxConcurrentTaskCount
 * @property AnnotationConsolidationConfig|null $AnnotationConsolidationConfig
 * @property PublicWorkforceTaskPrice|null $PublicWorkforceTaskPrice
 */
class HumanTaskConfig extends Shape
{
    /**
     * @param array{
     *     WorkteamArn: string,
     *     UiConfig: UiConfig,
     *     PreHumanTaskLambdaArn?: string|null,
     *     TaskKeywords?: list<string>|null,
     *     TaskTitle: string,
     *     TaskDescription: string,
     *     NumberOfHumanWorkersPerDataObject: int<1, 9>,
     *     TaskTimeLimitInSeconds: int<30, max>,
     *     TaskAvailabilityLifetimeInSeconds?: int<60, max>|null,
     *     MaxConcurrentTaskCount?: int<1, 5000>|null,
     *     AnnotationConsolidationConfig?: AnnotationConsolidationConfig|null,
     *     PublicWorkforceTaskPrice?: PublicWorkforceTaskPrice|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
