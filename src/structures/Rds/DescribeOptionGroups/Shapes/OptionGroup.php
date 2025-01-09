<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeOptionGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OptionGroupName
 * @property string $OptionGroupDescription
 * @property string $EngineName
 * @property string $MajorEngineVersion
 * @property list<Option> $Options
 * @property bool $AllowsVpcAndNonVpcInstanceMemberships
 * @property string $VpcId
 * @property string $OptionGroupArn
 * @property string $SourceOptionGroup
 * @property string $SourceAccountId
 * @property \Aws\Api\DateTimeResult $CopyTimestamp
 */
class OptionGroup extends Shape
{
    /**
     * @param array{
     *     OptionGroupName?: string,
     *     OptionGroupDescription?: string,
     *     EngineName?: string,
     *     MajorEngineVersion?: string,
     *     Options?: list<Option>,
     *     AllowsVpcAndNonVpcInstanceMemberships?: bool,
     *     VpcId?: string,
     *     OptionGroupArn?: string,
     *     SourceOptionGroup?: string,
     *     SourceAccountId?: string,
     *     CopyTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
