<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeLaunchTemplateVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LaunchTemplateId
 * @property string $LaunchTemplateName
 * @property int $VersionNumber
 * @property string $VersionDescription
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property string $CreatedBy
 * @property bool $DefaultVersion
 * @property ResponseLaunchTemplateData $LaunchTemplateData
 * @property OperatorResponse $Operator
 */
class LaunchTemplateVersion extends Shape
{
    /**
     * @param array{
     *     LaunchTemplateId?: string,
     *     LaunchTemplateName?: string,
     *     VersionNumber?: int,
     *     VersionDescription?: string,
     *     CreateTime?: \Aws\Api\DateTimeResult,
     *     CreatedBy?: string,
     *     DefaultVersion?: bool,
     *     LaunchTemplateData?: ResponseLaunchTemplateData,
     *     Operator?: OperatorResponse
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
