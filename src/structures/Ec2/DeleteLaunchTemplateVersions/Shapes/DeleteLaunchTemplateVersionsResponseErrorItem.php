<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteLaunchTemplateVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LaunchTemplateId
 * @property string|null $LaunchTemplateName
 * @property int|null $VersionNumber
 * @property ResponseError|null $ResponseError
 */
class DeleteLaunchTemplateVersionsResponseErrorItem extends Shape
{
    /**
     * @param array{
     *     LaunchTemplateId?: string|null,
     *     LaunchTemplateName?: string|null,
     *     VersionNumber?: int|null,
     *     ResponseError?: ResponseError|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
