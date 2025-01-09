<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteLaunchTemplateVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LaunchTemplateId
 * @property string $LaunchTemplateName
 * @property int $VersionNumber
 */
class DeleteLaunchTemplateVersionsResponseSuccessItem extends Shape
{
    /**
     * @param array{
     *     LaunchTemplateId?: string,
     *     LaunchTemplateName?: string,
     *     VersionNumber?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
