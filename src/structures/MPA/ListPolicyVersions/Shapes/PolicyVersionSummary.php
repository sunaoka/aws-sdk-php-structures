<?php

namespace Sunaoka\Aws\Structures\MPA\ListPolicyVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $PolicyArn
 * @property int<1, max> $VersionId
 * @property 'AWS_MANAGED'|'AWS_RAM' $PolicyType
 * @property bool $IsDefault
 * @property string $Name
 * @property 'ATTACHABLE'|'DEPRECATED' $Status
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 */
class PolicyVersionSummary extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     PolicyArn: string,
     *     VersionId: int<1, max>,
     *     PolicyType: 'AWS_MANAGED'|'AWS_RAM',
     *     IsDefault: bool,
     *     Name: string,
     *     Status: 'ATTACHABLE'|'DEPRECATED',
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     LastUpdatedTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
