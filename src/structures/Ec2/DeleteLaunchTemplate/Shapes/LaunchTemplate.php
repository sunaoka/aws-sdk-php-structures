<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteLaunchTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LaunchTemplateId
 * @property string|null $LaunchTemplateName
 * @property \Aws\Api\DateTimeResult|null $CreateTime
 * @property string|null $CreatedBy
 * @property int|null $DefaultVersionNumber
 * @property int|null $LatestVersionNumber
 * @property list<Tag>|null $Tags
 * @property OperatorResponse|null $Operator
 */
class LaunchTemplate extends Shape
{
    /**
     * @param array{
     *     LaunchTemplateId?: string|null,
     *     LaunchTemplateName?: string|null,
     *     CreateTime?: \Aws\Api\DateTimeResult|null,
     *     CreatedBy?: string|null,
     *     DefaultVersionNumber?: int|null,
     *     LatestVersionNumber?: int|null,
     *     Tags?: list<Tag>|null,
     *     Operator?: OperatorResponse|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
