<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLaunchTemplateVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LaunchTemplateId
 * @property string|null $LaunchTemplateName
 * @property int|null $VersionNumber
 * @property string|null $VersionDescription
 * @property \Aws\Api\DateTimeResult|null $CreateTime
 * @property string|null $CreatedBy
 * @property bool|null $DefaultVersion
 * @property ResponseLaunchTemplateData|null $LaunchTemplateData
 * @property OperatorResponse|null $Operator
 */
class LaunchTemplateVersion extends Shape
{
    /**
     * @param array{
     *     LaunchTemplateId?: string|null,
     *     LaunchTemplateName?: string|null,
     *     VersionNumber?: int|null,
     *     VersionDescription?: string|null,
     *     CreateTime?: \Aws\Api\DateTimeResult|null,
     *     CreatedBy?: string|null,
     *     DefaultVersion?: bool|null,
     *     LaunchTemplateData?: ResponseLaunchTemplateData|null,
     *     Operator?: OperatorResponse|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
