<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateFlowDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WorkteamArn
 * @property string $HumanTaskUiArn
 * @property string $TaskTitle
 * @property string $TaskDescription
 * @property int<1, 3> $TaskCount
 * @property int<1, max> $TaskAvailabilityLifetimeInSeconds
 * @property int<30, max> $TaskTimeLimitInSeconds
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
     *     TaskCount: int<1, 3>,
     *     TaskAvailabilityLifetimeInSeconds?: int<1, max>,
     *     TaskTimeLimitInSeconds?: int<30, max>,
     *     TaskKeywords?: list<string>,
     *     PublicWorkforceTaskPrice?: PublicWorkforceTaskPrice
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
