<?php

namespace Sunaoka\Aws\Structures\drs\CreateLaunchConfigurationTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $copyPrivateIp
 * @property bool|null $copyTags
 * @property string|null $exportBucketArn
 * @property 'STOPPED'|'STARTED'|null $launchDisposition
 * @property bool|null $launchIntoSourceInstance
 * @property Shapes\Licensing|null $licensing
 * @property bool|null $postLaunchEnabled
 * @property array<string, string>|null $tags
 * @property 'NONE'|'BASIC'|'IN_AWS'|null $targetInstanceTypeRightSizingMethod
 */
class CreateLaunchConfigurationTemplateRequest extends Request
{
    /**
     * @param array{
     *     copyPrivateIp?: bool|null,
     *     copyTags?: bool|null,
     *     exportBucketArn?: string|null,
     *     launchDisposition?: 'STOPPED'|'STARTED'|null,
     *     launchIntoSourceInstance?: bool|null,
     *     licensing?: Shapes\Licensing|null,
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
