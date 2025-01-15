<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\StartModelPackagingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CompilerOptions
 * @property 'jetson_xavier'|null $TargetDevice
 * @property TargetPlatform|null $TargetPlatform
 * @property S3Location $S3OutputLocation
 * @property string $ComponentName
 * @property string|null $ComponentVersion
 * @property string|null $ComponentDescription
 * @property list<Tag>|null $Tags
 */
class GreengrassConfiguration extends Shape
{
    /**
     * @param array{
     *     CompilerOptions?: string|null,
     *     TargetDevice?: 'jetson_xavier'|null,
     *     TargetPlatform?: TargetPlatform|null,
     *     S3OutputLocation: S3Location,
     *     ComponentName: string,
     *     ComponentVersion?: string|null,
     *     ComponentDescription?: string|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
