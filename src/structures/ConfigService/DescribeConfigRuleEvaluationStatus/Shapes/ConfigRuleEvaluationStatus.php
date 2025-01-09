<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeConfigRuleEvaluationStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConfigRuleName
 * @property string $ConfigRuleArn
 * @property string $ConfigRuleId
 * @property \Aws\Api\DateTimeResult $LastSuccessfulInvocationTime
 * @property \Aws\Api\DateTimeResult $LastFailedInvocationTime
 * @property \Aws\Api\DateTimeResult $LastSuccessfulEvaluationTime
 * @property \Aws\Api\DateTimeResult $LastFailedEvaluationTime
 * @property \Aws\Api\DateTimeResult $FirstActivatedTime
 * @property \Aws\Api\DateTimeResult $LastDeactivatedTime
 * @property string $LastErrorCode
 * @property string $LastErrorMessage
 * @property bool $FirstEvaluationStarted
 * @property string $LastDebugLogDeliveryStatus
 * @property string $LastDebugLogDeliveryStatusReason
 * @property \Aws\Api\DateTimeResult $LastDebugLogDeliveryTime
 */
class ConfigRuleEvaluationStatus extends Shape
{
    /**
     * @param array{
     *     ConfigRuleName?: string,
     *     ConfigRuleArn?: string,
     *     ConfigRuleId?: string,
     *     LastSuccessfulInvocationTime?: \Aws\Api\DateTimeResult,
     *     LastFailedInvocationTime?: \Aws\Api\DateTimeResult,
     *     LastSuccessfulEvaluationTime?: \Aws\Api\DateTimeResult,
     *     LastFailedEvaluationTime?: \Aws\Api\DateTimeResult,
     *     FirstActivatedTime?: \Aws\Api\DateTimeResult,
     *     LastDeactivatedTime?: \Aws\Api\DateTimeResult,
     *     LastErrorCode?: string,
     *     LastErrorMessage?: string,
     *     FirstEvaluationStarted?: bool,
     *     LastDebugLogDeliveryStatus?: string,
     *     LastDebugLogDeliveryStatusReason?: string,
     *     LastDebugLogDeliveryTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
