<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeFlowDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WorkteamArn
 * @property string $HumanTaskUiArn
 * @property string $TaskTitle
 * @property string $TaskDescription
 * @property int<1, 3> $TaskCount
 * @property int<1, max>|null $TaskAvailabilityLifetimeInSeconds
 * @property int<30, max>|null $TaskTimeLimitInSeconds
 * @property list<string>|null $TaskKeywords
 * @property PublicWorkforceTaskPrice|null $PublicWorkforceTaskPrice
 */
class HumanLoopConfig extends Shape
{
    /**
     * @param array{
     *     WorkteamArn: string,
     *     HumanTaskUiArn: string,
     *     TaskTitle: string,
     *     TaskDescription: string,
     *     TaskCount: int<1, 3>,
     *     TaskAvailabilityLifetimeInSeconds?: int<1, max>|null,
     *     TaskTimeLimitInSeconds?: int<30, max>|null,
     *     TaskKeywords?: list<string>|null,
     *     PublicWorkforceTaskPrice?: PublicWorkforceTaskPrice|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
