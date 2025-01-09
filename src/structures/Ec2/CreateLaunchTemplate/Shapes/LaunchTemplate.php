<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLaunchTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LaunchTemplateId
 * @property string $LaunchTemplateName
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property string $CreatedBy
 * @property int $DefaultVersionNumber
 * @property int $LatestVersionNumber
 * @property list<Tag> $Tags
 * @property OperatorResponse $Operator
 */
class LaunchTemplate extends Shape
{
    /**
     * @param array{
     *     LaunchTemplateId?: string,
     *     LaunchTemplateName?: string,
     *     CreateTime?: \Aws\Api\DateTimeResult,
     *     CreatedBy?: string,
     *     DefaultVersionNumber?: int,
     *     LatestVersionNumber?: int,
     *     Tags?: list<Tag>,
     *     Operator?: OperatorResponse
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
