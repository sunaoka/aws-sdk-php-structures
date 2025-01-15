<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeTrainingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ManifestFile'|'S3Prefix'|'AugmentedManifestFile' $S3DataType
 * @property string $S3Uri
 * @property 'FullyReplicated'|'ShardedByS3Key'|null $S3DataDistributionType
 * @property list<string>|null $AttributeNames
 * @property list<string>|null $InstanceGroupNames
 */
class S3DataSource extends Shape
{
    /**
     * @param array{
     *     S3DataType: 'ManifestFile'|'S3Prefix'|'AugmentedManifestFile',
     *     S3Uri: string,
     *     S3DataDistributionType?: 'FullyReplicated'|'ShardedByS3Key'|null,
     *     AttributeNames?: list<string>|null,
     *     InstanceGroupNames?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
