<?php

namespace Sunaoka\Aws\Structures\drs\CreateLaunchConfigurationTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $copyPrivateIp
 * @property bool $copyTags
 * @property string $exportBucketArn
 * @property 'STOPPED'|'STARTED' $launchDisposition
 * @property bool $launchIntoSourceInstance
 * @property Shapes\Licensing $licensing
 * @property bool $postLaunchEnabled
 * @property array<string, string> $tags
 * @property 'NONE'|'BASIC'|'IN_AWS' $targetInstanceTypeRightSizingMethod
 */
class CreateLaunchConfigurationTemplateRequest extends Request
{
    /**
     * @param array{
     *     copyPrivateIp?: bool,
     *     copyTags?: bool,
     *     exportBucketArn?: string,
     *     launchDisposition?: 'STOPPED'|'STARTED',
     *     launchIntoSourceInstance?: bool,
     *     licensing?: Shapes\Licensing,
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
