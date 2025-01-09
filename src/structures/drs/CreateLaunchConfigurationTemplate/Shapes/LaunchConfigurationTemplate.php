<?php

namespace Sunaoka\Aws\Structures\drs\CreateLaunchConfigurationTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property bool $copyPrivateIp
 * @property bool $copyTags
 * @property string $exportBucketArn
 * @property string $launchConfigurationTemplateID
 * @property 'STOPPED'|'STARTED' $launchDisposition
 * @property bool $launchIntoSourceInstance
 * @property Licensing $licensing
 * @property bool $postLaunchEnabled
 * @property array<string, string> $tags
 * @property 'NONE'|'BASIC'|'IN_AWS' $targetInstanceTypeRightSizingMethod
 */
class LaunchConfigurationTemplate extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     copyPrivateIp?: bool,
     *     copyTags?: bool,
     *     exportBucketArn?: string,
     *     launchConfigurationTemplateID?: string,
     *     launchDisposition?: 'STOPPED'|'STARTED',
     *     launchIntoSourceInstance?: bool,
     *     licensing?: Licensing,
     *     postLaunchEnabled?: bool,
     *     tags?: array<string, string>,
     *     targetInstanceTypeRightSizingMethod?: 'NONE'|'BASIC'|'IN_AWS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
