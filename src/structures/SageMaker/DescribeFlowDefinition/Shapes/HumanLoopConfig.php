<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeFlowDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WorkteamArn
 * @property string $HumanTaskUiArn
 * @property string $TaskTitle
 * @property string $TaskDescription
 * @property int $TaskCount
 * @property int $TaskAvailabilityLifetimeInSeconds
 * @property int $TaskTimeLimitInSeconds
 * @property list<string> $TaskKeywords
 * @property PublicWorkforceTaskPrice $PublicWorkforceTaskPrice
 */
class HumanLoopConfig extends Shape
{
    /**
     * @param array{
     *     WorkteamArn: string,
     *     HumanTaskUiArn: string,
     *     TaskTitle: string,
     *     TaskDescription: string,
     *     TaskCount: int,
     *     TaskAvailabilityLifetimeInSeconds?: int,
     *     TaskTimeLimitInSeconds?: int,
     *     TaskKeywords?: list<string>,
     *     PublicWorkforceTaskPrice?: PublicWorkforceTaskPrice
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
