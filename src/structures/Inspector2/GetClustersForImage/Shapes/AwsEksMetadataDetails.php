<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetClustersForImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $namespace
 * @property list<AwsEksWorkloadInfo>|null $workloadInfoList
 */
class AwsEksMetadataDetails extends Shape
{
    /**
     * @param array{
     *     namespace?: string|null,
     *     workloadInfoList?: list<AwsEksWorkloadInfo>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
