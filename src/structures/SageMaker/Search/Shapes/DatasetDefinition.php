<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AthenaDatasetDefinition|null $AthenaDatasetDefinition
 * @property RedshiftDatasetDefinition|null $RedshiftDatasetDefinition
 * @property string|null $LocalPath
 * @property 'FullyReplicated'|'ShardedByS3Key'|null $DataDistributionType
 * @property 'Pipe'|'File'|null $InputMode
 */
class DatasetDefinition extends Shape
{
    /**
     * @param array{
     *     AthenaDatasetDefinition?: AthenaDatasetDefinition|null,
     *     RedshiftDatasetDefinition?: RedshiftDatasetDefinition|null,
     *     LocalPath?: string|null,
     *     DataDistributionType?: 'FullyReplicated'|'ShardedByS3Key'|null,
     *     InputMode?: 'Pipe'|'File'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
