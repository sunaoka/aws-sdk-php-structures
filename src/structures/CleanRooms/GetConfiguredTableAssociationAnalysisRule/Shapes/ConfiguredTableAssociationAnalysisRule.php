<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetConfiguredTableAssociationAnalysisRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $membershipIdentifier
 * @property string $configuredTableAssociationId
 * @property string $configuredTableAssociationArn
 * @property ConfiguredTableAssociationAnalysisRulePolicy $policy
 * @property 'AGGREGATION'|'LIST'|'CUSTOM' $type
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 */
class ConfiguredTableAssociationAnalysisRule extends Shape
{
    /**
     * @param array{
     *     membershipIdentifier: string,
     *     configuredTableAssociationId: string,
     *     configuredTableAssociationArn: string,
     *     policy: ConfiguredTableAssociationAnalysisRulePolicy,
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
