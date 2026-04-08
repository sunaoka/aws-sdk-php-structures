<?php

namespace Sunaoka\Aws\Structures\drs\CreateLaunchConfigurationTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, string>|null $tags
 * @property 'STOPPED'|'STARTED'|null $launchDisposition
 * @property 'NONE'|'BASIC'|'IN_AWS'|null $targetInstanceTypeRightSizingMethod
 * @property bool|null $copyPrivateIp
 * @property bool|null $copyTags
 * @property Shapes\Licensing|null $licensing
 * @property string|null $exportBucketArn
 * @property bool|null $postLaunchEnabled
 * @property bool|null $launchIntoSourceInstance
 */
class CreateLaunchConfigurationTemplateRequest extends Request
{
    /**
     * @param array{
     *     tags?: array<string, string>|null,
     *     launchDisposition?: 'STOPPED'|'STARTED'|null,
     *     targetInstanceTypeRightSizingMethod?: 'NONE'|'BASIC'|'IN_AWS'|null,
     *     copyPrivateIp?: bool|null,
     *     copyTags?: bool|null,
     *     licensing?: Shapes\Licensing|null,
     *     exportBucketArn?: string|null,
     *     postLaunchEnabled?: bool|null,
     *     launchIntoSourceInstance?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
