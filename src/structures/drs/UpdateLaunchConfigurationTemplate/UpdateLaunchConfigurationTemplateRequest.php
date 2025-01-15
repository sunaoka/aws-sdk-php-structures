<?php

namespace Sunaoka\Aws\Structures\drs\UpdateLaunchConfigurationTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $copyPrivateIp
 * @property bool|null $copyTags
 * @property string|null $exportBucketArn
 * @property string $launchConfigurationTemplateID
 * @property 'STOPPED'|'STARTED'|null $launchDisposition
 * @property bool|null $launchIntoSourceInstance
 * @property Shapes\Licensing|null $licensing
 * @property bool|null $postLaunchEnabled
 * @property 'NONE'|'BASIC'|'IN_AWS'|null $targetInstanceTypeRightSizingMethod
 */
class UpdateLaunchConfigurationTemplateRequest extends Request
{
    /**
     * @param array{
     *     copyPrivateIp?: bool|null,
     *     copyTags?: bool|null,
     *     exportBucketArn?: string|null,
     *     launchConfigurationTemplateID: string,
     *     launchDisposition?: 'STOPPED'|'STARTED'|null,
     *     launchIntoSourceInstance?: bool|null,
     *     licensing?: Shapes\Licensing|null,
     *     postLaunchEnabled?: bool|null,
     *     targetInstanceTypeRightSizingMethod?: 'NONE'|'BASIC'|'IN_AWS'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
