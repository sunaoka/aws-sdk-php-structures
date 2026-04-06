<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeImages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string|null $Arn
 * @property string|null $BaseImageArn
 * @property string|null $DisplayName
 * @property 'PENDING'|'AVAILABLE'|'FAILED'|'COPYING'|'DELETING'|'CREATING'|'IMPORTING'|'VALIDATING'|null $State
 * @property 'PUBLIC'|'PRIVATE'|'SHARED'|null $Visibility
 * @property bool|null $ImageBuilderSupported
 * @property string|null $ImageBuilderName
 * @property 'WINDOWS'|'WINDOWS_SERVER_2016'|'WINDOWS_SERVER_2019'|'WINDOWS_SERVER_2022'|'WINDOWS_SERVER_2025'|'AMAZON_LINUX2'|'RHEL8'|'ROCKY_LINUX8'|'UBUNTU_PRO_2404'|null $Platform
 * @property string|null $Description
 * @property ImageStateChangeReason|null $StateChangeReason
 * @property list<Application>|null $Applications
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property \Aws\Api\DateTimeResult|null $PublicBaseImageReleasedDate
 * @property string|null $AppstreamAgentVersion
 * @property ImagePermissions|null $ImagePermissions
 * @property list<ResourceError>|null $ImageErrors
 * @property 'TRUE'|'FALSE'|null $LatestAppstreamAgentVersion
 * @property list<string>|null $SupportedInstanceFamilies
 * @property 'ENABLED'|'DISABLED'|null $DynamicAppProvidersEnabled
 * @property 'TRUE'|'FALSE'|null $ImageSharedWithOthers
 * @property bool|null $ManagedSoftwareIncluded
 * @property 'CUSTOM'|'NATIVE'|null $ImageType
 */
class Image extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Arn?: string|null,
     *     BaseImageArn?: string|null,
     *     DisplayName?: string|null,
     *     State?: 'PENDING'|'AVAILABLE'|'FAILED'|'COPYING'|'DELETING'|'CREATING'|'IMPORTING'|'VALIDATING'|null,
     *     Visibility?: 'PUBLIC'|'PRIVATE'|'SHARED'|null,
     *     ImageBuilderSupported?: bool|null,
     *     ImageBuilderName?: string|null,
     *     Platform?: 'WINDOWS'|'WINDOWS_SERVER_2016'|'WINDOWS_SERVER_2019'|'WINDOWS_SERVER_2022'|'WINDOWS_SERVER_2025'|'AMAZON_LINUX2'|'RHEL8'|'ROCKY_LINUX8'|'UBUNTU_PRO_2404'|null,
     *     Description?: string|null,
     *     StateChangeReason?: ImageStateChangeReason|null,
     *     Applications?: list<Application>|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     PublicBaseImageReleasedDate?: \Aws\Api\DateTimeResult|null,
     *     AppstreamAgentVersion?: string|null,
     *     ImagePermissions?: ImagePermissions|null,
     *     ImageErrors?: list<ResourceError>|null,
     *     LatestAppstreamAgentVersion?: 'TRUE'|'FALSE'|null,
     *     SupportedInstanceFamilies?: list<string>|null,
     *     DynamicAppProvidersEnabled?: 'ENABLED'|'DISABLED'|null,
     *     ImageSharedWithOthers?: 'TRUE'|'FALSE'|null,
     *     ManagedSoftwareIncluded?: bool|null,
     *     ImageType?: 'CUSTOM'|'NATIVE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
