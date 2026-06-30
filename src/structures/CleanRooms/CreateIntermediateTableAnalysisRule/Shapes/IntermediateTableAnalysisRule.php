<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateIntermediateTableAnalysisRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $intermediateTableIdentifier
 * @property string $intermediateTableArn
 * @property IntermediateTableAnalysisRulePolicy $analysisRulePolicy
 * @property 'CUSTOM' $analysisRuleType
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 */
class IntermediateTableAnalysisRule extends Shape
{
    /**
     * @param array{
     *     intermediateTableIdentifier: string,
     *     intermediateTableArn: string,
     *     analysisRulePolicy: IntermediateTableAnalysisRulePolicy,
     *     analysisRuleType: 'CUSTOM',
     *     createTime: \Aws\Api\DateTimeResult,
     *     updateTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
