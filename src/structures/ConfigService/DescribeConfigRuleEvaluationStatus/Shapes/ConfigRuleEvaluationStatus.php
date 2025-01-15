<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeConfigRuleEvaluationStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ConfigRuleName
 * @property string|null $ConfigRuleArn
 * @property string|null $ConfigRuleId
 * @property \Aws\Api\DateTimeResult|null $LastSuccessfulInvocationTime
 * @property \Aws\Api\DateTimeResult|null $LastFailedInvocationTime
 * @property \Aws\Api\DateTimeResult|null $LastSuccessfulEvaluationTime
 * @property \Aws\Api\DateTimeResult|null $LastFailedEvaluationTime
 * @property \Aws\Api\DateTimeResult|null $FirstActivatedTime
 * @property \Aws\Api\DateTimeResult|null $LastDeactivatedTime
 * @property string|null $LastErrorCode
 * @property string|null $LastErrorMessage
 * @property bool|null $FirstEvaluationStarted
 * @property string|null $LastDebugLogDeliveryStatus
 * @property string|null $LastDebugLogDeliveryStatusReason
 * @property \Aws\Api\DateTimeResult|null $LastDebugLogDeliveryTime
 */
class ConfigRuleEvaluationStatus extends Shape
{
    /**
     * @param array{
     *     ConfigRuleName?: string|null,
     *     ConfigRuleArn?: string|null,
     *     ConfigRuleId?: string|null,
     *     LastSuccessfulInvocationTime?: \Aws\Api\DateTimeResult|null,
     *     LastFailedInvocationTime?: \Aws\Api\DateTimeResult|null,
     *     LastSuccessfulEvaluationTime?: \Aws\Api\DateTimeResult|null,
     *     LastFailedEvaluationTime?: \Aws\Api\DateTimeResult|null,
     *     FirstActivatedTime?: \Aws\Api\DateTimeResult|null,
     *     LastDeactivatedTime?: \Aws\Api\DateTimeResult|null,
     *     LastErrorCode?: string|null,
     *     LastErrorMessage?: string|null,
     *     FirstEvaluationStarted?: bool|null,
     *     LastDebugLogDeliveryStatus?: string|null,
     *     LastDebugLogDeliveryStatusReason?: string|null,
     *     LastDebugLogDeliveryTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
