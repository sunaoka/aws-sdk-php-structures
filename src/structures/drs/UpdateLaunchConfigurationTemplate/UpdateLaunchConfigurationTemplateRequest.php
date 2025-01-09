<?php

namespace Sunaoka\Aws\Structures\drs\UpdateLaunchConfigurationTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $copyPrivateIp
 * @property bool $copyTags
 * @property string $exportBucketArn
 * @property string $launchConfigurationTemplateID
 * @property 'STOPPED'|'STARTED' $launchDisposition
 * @property bool $launchIntoSourceInstance
 * @property Shapes\Licensing $licensing
 * @property bool $postLaunchEnabled
 * @property 'NONE'|'BASIC'|'IN_AWS' $targetInstanceTypeRightSizingMethod
 */
class UpdateLaunchConfigurationTemplateRequest extends Request
{
    /**
     * @param array{
     *     copyPrivateIp?: bool,
     *     copyTags?: bool,
     *     exportBucketArn?: string,
     *     launchConfigurationTemplateID: string,
     *     launchDisposition?: 'STOPPED'|'STARTED',
     *     launchIntoSourceInstance?: bool,
     *     licensing?: Shapes\Licensing,
     *     postLaunchEnabled?: bool,
     *     targetInstanceTypeRightSizingMethod?: 'NONE'|'BASIC'|'IN_AWS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
