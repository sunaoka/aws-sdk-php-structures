<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\ListRulesets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 * @property string $CreatedBy
 * @property \Aws\Api\DateTimeResult $CreateDate
 * @property string $Description
 * @property string $LastModifiedBy
 * @property \Aws\Api\DateTimeResult $LastModifiedDate
 * @property string $Name
 * @property string $ResourceArn
 * @property int $RuleCount
 * @property array<string, string> $Tags
 * @property string $TargetArn
 */
class RulesetItem extends Shape
{
    /**
     * @param array{
     *     AccountId?: string,
     *     CreatedBy?: string,
     *     CreateDate?: \Aws\Api\DateTimeResult,
     *     Description?: string,
     *     LastModifiedBy?: string,
     *     LastModifiedDate?: \Aws\Api\DateTimeResult,
     *     Name: string,
     *     ResourceArn?: string,
     *     RuleCount?: int,
     *     Tags?: array<string, string>,
     *     TargetArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
