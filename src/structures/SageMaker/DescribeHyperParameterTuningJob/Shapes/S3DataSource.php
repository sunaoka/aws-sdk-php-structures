<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeHyperParameterTuningJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ManifestFile'|'S3Prefix'|'AugmentedManifestFile'|'Converse' $S3DataType
 * @property string $S3Uri
 * @property 'FullyReplicated'|'ShardedByS3Key'|null $S3DataDistributionType
 * @property list<string>|null $AttributeNames
 * @property list<string>|null $InstanceGroupNames
 * @property ModelAccessConfig|null $ModelAccessConfig
 * @property HubAccessConfig|null $HubAccessConfig
 */
class S3DataSource extends Shape
{
    /**
     * @param array{
     *     S3DataType: 'ManifestFile'|'S3Prefix'|'AugmentedManifestFile'|'Converse',
     *     S3Uri: string,
     *     S3DataDistributionType?: 'FullyReplicated'|'ShardedByS3Key'|null,
     *     AttributeNames?: list<string>|null,
     *     InstanceGroupNames?: list<string>|null,
     *     ModelAccessConfig?: ModelAccessConfig|null,
     *     HubAccessConfig?: HubAccessConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
