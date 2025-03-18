<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListConfiguredTableAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $configuredTableId
 * @property string $membershipId
 * @property string $membershipArn
 * @property string $name
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property string $id
 * @property string $arn
 * @property list<'AGGREGATION'|'LIST'|'CUSTOM'>|null $analysisRuleTypes
 */
class ConfiguredTableAssociationSummary extends Shape
{
    /**
     * @param array{
     *     configuredTableId: string,
     *     membershipId: string,
     *     membershipArn: string,
     *     name: string,
     *     createTime: \Aws\Api\DateTimeResult,
     *     updateTime: \Aws\Api\DateTimeResult,
     *     id: string,
     *     arn: string,
     *     analysisRuleTypes?: list<'AGGREGATION'|'LIST'|'CUSTOM'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
