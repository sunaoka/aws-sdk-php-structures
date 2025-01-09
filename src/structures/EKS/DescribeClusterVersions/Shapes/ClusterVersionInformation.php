<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeClusterVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $clusterVersion
 * @property string $clusterType
 * @property string $defaultPlatformVersion
 * @property bool $defaultVersion
 * @property \Aws\Api\DateTimeResult $releaseDate
 * @property \Aws\Api\DateTimeResult $endOfStandardSupportDate
 * @property \Aws\Api\DateTimeResult $endOfExtendedSupportDate
 * @property 'unsupported'|'standard-support'|'extended-support' $status
 * @property string $kubernetesPatchVersion
 */
class ClusterVersionInformation extends Shape
{
    /**
     * @param array{
     *     clusterVersion?: string,
     *     clusterType?: string,
     *     defaultPlatformVersion?: string,
     *     defaultVersion?: bool,
     *     releaseDate?: \Aws\Api\DateTimeResult,
     *     endOfStandardSupportDate?: \Aws\Api\DateTimeResult,
     *     endOfExtendedSupportDate?: \Aws\Api\DateTimeResult,
     *     status?: 'unsupported'|'standard-support'|'extended-support',
     *     kubernetesPatchVersion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
