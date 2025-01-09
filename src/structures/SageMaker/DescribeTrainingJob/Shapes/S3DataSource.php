<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeTrainingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ManifestFile'|'S3Prefix'|'AugmentedManifestFile' $S3DataType
 * @property string $S3Uri
 * @property 'FullyReplicated'|'ShardedByS3Key' $S3DataDistributionType
 * @property list<string> $AttributeNames
 * @property list<string> $InstanceGroupNames
 */
class S3DataSource extends Shape
{
    /**
     * @param array{
     *     S3DataType: 'ManifestFile'|'S3Prefix'|'AugmentedManifestFile',
     *     S3Uri: string,
     *     S3DataDistributionType?: 'FullyReplicated'|'ShardedByS3Key',
     *     AttributeNames?: list<string>,
     *     InstanceGroupNames?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
