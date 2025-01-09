<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeProcessingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AthenaDatasetDefinition $AthenaDatasetDefinition
 * @property RedshiftDatasetDefinition $RedshiftDatasetDefinition
 * @property string $LocalPath
 * @property 'FullyReplicated'|'ShardedByS3Key' $DataDistributionType
 * @property 'Pipe'|'File' $InputMode
 */
class DatasetDefinition extends Shape
{
    /**
     * @param array{
     *     AthenaDatasetDefinition?: AthenaDatasetDefinition,
     *     RedshiftDatasetDefinition?: RedshiftDatasetDefinition,
     *     LocalPath?: string,
     *     DataDistributionType?: 'FullyReplicated'|'ShardedByS3Key',
     *     InputMode?: 'Pipe'|'File'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
