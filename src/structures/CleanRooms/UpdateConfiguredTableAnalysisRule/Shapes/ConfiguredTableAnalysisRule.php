<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateConfiguredTableAnalysisRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $configuredTableId
 * @property string $configuredTableArn
 * @property ConfiguredTableAnalysisRulePolicy $policy
 * @property 'AGGREGATION'|'LIST'|'CUSTOM' $type
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 */
class ConfiguredTableAnalysisRule extends Shape
{
    /**
     * @param array{
     *     configuredTableId: string,
     *     configuredTableArn: string,
     *     policy: ConfiguredTableAnalysisRulePolicy,
     *     type: 'AGGREGATION'|'LIST'|'CUSTOM',
     *     createTime: \Aws\Api\DateTimeResult,
     *     updateTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
