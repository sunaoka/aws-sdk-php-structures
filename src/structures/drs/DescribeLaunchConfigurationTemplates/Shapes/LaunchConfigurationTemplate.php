<?php

namespace Sunaoka\Aws\Structures\drs\DescribeLaunchConfigurationTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property bool|null $copyPrivateIp
 * @property bool|null $copyTags
 * @property string|null $exportBucketArn
 * @property string|null $launchConfigurationTemplateID
 * @property 'STOPPED'|'STARTED'|null $launchDisposition
 * @property bool|null $launchIntoSourceInstance
 * @property Licensing|null $licensing
 * @property bool|null $postLaunchEnabled
 * @property array<string, string>|null $tags
 * @property 'NONE'|'BASIC'|'IN_AWS'|null $targetInstanceTypeRightSizingMethod
 */
class LaunchConfigurationTemplate extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     copyPrivateIp?: bool|null,
     *     copyTags?: bool|null,
     *     exportBucketArn?: string|null,
     *     launchConfigurationTemplateID?: string|null,
     *     launchDisposition?: 'STOPPED'|'STARTED'|null,
     *     launchIntoSourceInstance?: bool|null,
     *     licensing?: Licensing|null,
     *     postLaunchEnabled?: bool|null,
     *     tags?: array<string, string>|null,
     *     targetInstanceTypeRightSizingMethod?: 'NONE'|'BASIC'|'IN_AWS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
