<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateConfiguredTableAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $id
 * @property string $configuredTableId
 * @property string $configuredTableArn
 * @property string $membershipId
 * @property string $membershipArn
 * @property string $roleArn
 * @property string $name
 * @property string|null $description
 * @property list<'AGGREGATION'|'LIST'|'CUSTOM'>|null $analysisRuleTypes
 * @property \Aws\Api\DateTimeResult $createTime
 * @property \Aws\Api\DateTimeResult $updateTime
 */
class ConfiguredTableAssociation extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     id: string,
     *     configuredTableId: string,
     *     configuredTableArn: string,
     *     membershipId: string,
     *     membershipArn: string,
     *     roleArn: string,
     *     name: string,
     *     description?: string|null,
     *     analysisRuleTypes?: list<'AGGREGATION'|'LIST'|'CUSTOM'>|null,
     *     createTime: \Aws\Api\DateTimeResult,
     *     updateTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
