<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeOptionGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OptionGroupName
 * @property string|null $OptionGroupDescription
 * @property string|null $EngineName
 * @property string|null $MajorEngineVersion
 * @property list<Option>|null $Options
 * @property bool|null $AllowsVpcAndNonVpcInstanceMemberships
 * @property string|null $VpcId
 * @property string|null $OptionGroupArn
 * @property string|null $SourceOptionGroup
 * @property string|null $SourceAccountId
 * @property \Aws\Api\DateTimeResult|null $CopyTimestamp
 */
class OptionGroup extends Shape
{
    /**
     * @param array{
     *     OptionGroupName?: string|null,
     *     OptionGroupDescription?: string|null,
     *     EngineName?: string|null,
     *     MajorEngineVersion?: string|null,
     *     Options?: list<Option>|null,
     *     AllowsVpcAndNonVpcInstanceMemberships?: bool|null,
     *     VpcId?: string|null,
     *     OptionGroupArn?: string|null,
     *     SourceOptionGroup?: string|null,
     *     SourceAccountId?: string|null,
     *     CopyTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
