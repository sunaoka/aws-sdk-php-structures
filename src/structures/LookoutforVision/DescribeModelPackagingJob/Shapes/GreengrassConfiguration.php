<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\DescribeModelPackagingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CompilerOptions
 * @property 'jetson_xavier' $TargetDevice
 * @property TargetPlatform $TargetPlatform
 * @property S3Location $S3OutputLocation
 * @property string $ComponentName
 * @property string $ComponentVersion
 * @property string $ComponentDescription
 * @property list<Tag> $Tags
 */
class GreengrassConfiguration extends Shape
{
    /**
     * @param array{
     *     CompilerOptions?: string,
     *     TargetDevice?: 'jetson_xavier',
     *     TargetPlatform?: TargetPlatform,
     *     S3OutputLocation: S3Location,
     *     ComponentName: string,
     *     ComponentVersion?: string,
     *     ComponentDescription?: string,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
