<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeImages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Arn
 * @property string $BaseImageArn
 * @property string $DisplayName
 * @property 'PENDING'|'AVAILABLE'|'FAILED'|'COPYING'|'DELETING'|'CREATING'|'IMPORTING' $State
 * @property 'PUBLIC'|'PRIVATE'|'SHARED' $Visibility
 * @property bool $ImageBuilderSupported
 * @property string $ImageBuilderName
 * @property 'WINDOWS'|'WINDOWS_SERVER_2016'|'WINDOWS_SERVER_2019'|'WINDOWS_SERVER_2022'|'AMAZON_LINUX2'|'RHEL8'|'ROCKY_LINUX8' $Platform
 * @property string $Description
 * @property ImageStateChangeReason $StateChangeReason
 * @property list<Application> $Applications
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property \Aws\Api\DateTimeResult $PublicBaseImageReleasedDate
 * @property string $AppstreamAgentVersion
 * @property ImagePermissions $ImagePermissions
 * @property list<ResourceError> $ImageErrors
 * @property 'TRUE'|'FALSE' $LatestAppstreamAgentVersion
 * @property list<string> $SupportedInstanceFamilies
 * @property 'ENABLED'|'DISABLED' $DynamicAppProvidersEnabled
 * @property 'TRUE'|'FALSE' $ImageSharedWithOthers
 */
class Image extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Arn?: string,
     *     BaseImageArn?: string,
     *     DisplayName?: string,
     *     State?: 'PENDING'|'AVAILABLE'|'FAILED'|'COPYING'|'DELETING'|'CREATING'|'IMPORTING',
     *     Visibility?: 'PUBLIC'|'PRIVATE'|'SHARED',
     *     ImageBuilderSupported?: bool,
     *     ImageBuilderName?: string,
     *     Platform?: 'WINDOWS'|'WINDOWS_SERVER_2016'|'WINDOWS_SERVER_2019'|'WINDOWS_SERVER_2022'|'AMAZON_LINUX2'|'RHEL8'|'ROCKY_LINUX8',
     *     Description?: string,
     *     StateChangeReason?: ImageStateChangeReason,
     *     Applications?: list<Application>,
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     PublicBaseImageReleasedDate?: \Aws\Api\DateTimeResult,
     *     AppstreamAgentVersion?: string,
     *     ImagePermissions?: ImagePermissions,
     *     ImageErrors?: list<ResourceError>,
     *     LatestAppstreamAgentVersion?: 'TRUE'|'FALSE',
     *     SupportedInstanceFamilies?: list<string>,
     *     DynamicAppProvidersEnabled?: 'ENABLED'|'DISABLED',
     *     ImageSharedWithOthers?: 'TRUE'|'FALSE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
