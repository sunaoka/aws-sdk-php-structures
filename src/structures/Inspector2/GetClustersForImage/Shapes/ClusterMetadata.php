<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetClustersForImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsEcsMetadataDetails|null $awsEcsMetadataDetails
 * @property AwsEksMetadataDetails|null $awsEksMetadataDetails
 */
class ClusterMetadata extends Shape
{
    /**
     * @param array{
     *     awsEcsMetadataDetails?: AwsEcsMetadataDetails|null,
     *     awsEksMetadataDetails?: AwsEksMetadataDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
