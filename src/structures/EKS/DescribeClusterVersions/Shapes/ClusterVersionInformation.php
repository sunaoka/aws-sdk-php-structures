<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeClusterVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $clusterVersion
 * @property string|null $clusterType
 * @property string|null $defaultPlatformVersion
 * @property bool|null $defaultVersion
 * @property \Aws\Api\DateTimeResult|null $releaseDate
 * @property \Aws\Api\DateTimeResult|null $endOfStandardSupportDate
 * @property \Aws\Api\DateTimeResult|null $endOfExtendedSupportDate
 * @property 'unsupported'|'standard-support'|'extended-support'|null $status
 * @property 'UNSUPPORTED'|'STANDARD_SUPPORT'|'EXTENDED_SUPPORT'|null $versionStatus
 * @property string|null $kubernetesPatchVersion
 */
class ClusterVersionInformation extends Shape
{
    /**
     * @param array{
     *     clusterVersion?: string|null,
     *     clusterType?: string|null,
     *     defaultPlatformVersion?: string|null,
     *     defaultVersion?: bool|null,
     *     releaseDate?: \Aws\Api\DateTimeResult|null,
     *     endOfStandardSupportDate?: \Aws\Api\DateTimeResult|null,
     *     endOfExtendedSupportDate?: \Aws\Api\DateTimeResult|null,
     *     status?: 'unsupported'|'standard-support'|'extended-support'|null,
     *     versionStatus?: 'UNSUPPORTED'|'STANDARD_SUPPORT'|'EXTENDED_SUPPORT'|null,
     *     kubernetesPatchVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
