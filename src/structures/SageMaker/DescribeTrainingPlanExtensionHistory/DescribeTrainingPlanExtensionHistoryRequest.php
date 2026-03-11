<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeTrainingPlanExtensionHistory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrainingPlanArn
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class DescribeTrainingPlanExtensionHistoryRequest extends Request
{
    /**
     * @param array{
     *     TrainingPlanArn: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
