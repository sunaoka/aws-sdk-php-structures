<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\ListRulesets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountId
 * @property string|null $CreatedBy
 * @property \Aws\Api\DateTimeResult|null $CreateDate
 * @property string|null $Description
 * @property string|null $LastModifiedBy
 * @property \Aws\Api\DateTimeResult|null $LastModifiedDate
 * @property string $Name
 * @property string|null $ResourceArn
 * @property int<0, max>|null $RuleCount
 * @property array<string, string>|null $Tags
 * @property string $TargetArn
 */
class RulesetItem extends Shape
{
    /**
     * @param array{
     *     AccountId?: string|null,
     *     CreatedBy?: string|null,
     *     CreateDate?: \Aws\Api\DateTimeResult|null,
     *     Description?: string|null,
     *     LastModifiedBy?: string|null,
     *     LastModifiedDate?: \Aws\Api\DateTimeResult|null,
     *     Name: string,
     *     ResourceArn?: string|null,
     *     RuleCount?: int<0, max>|null,
     *     Tags?: array<string, string>|null,
     *     TargetArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
