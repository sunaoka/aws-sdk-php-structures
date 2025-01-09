<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\ListDatasets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $datasetId
 * @property string $datasetArn
 * @property string $datasetTitle
 * @property 'TABULAR'|'NON_TABULAR' $kind
 * @property string $datasetDescription
 * @property DatasetOwnerInfo $ownerInfo
 * @property int $createTime
 * @property int $lastModifiedTime
 * @property SchemaUnion $schemaDefinition
 * @property string $alias
 */
class Dataset extends Shape
{
    /**
     * @param array{
     *     datasetId?: string,
     *     datasetArn?: string,
     *     datasetTitle?: string,
     *     kind?: 'TABULAR'|'NON_TABULAR',
     *     datasetDescription?: string,
     *     ownerInfo?: DatasetOwnerInfo,
     *     createTime?: int,
     *     lastModifiedTime?: int,
     *     schemaDefinition?: SchemaUnion,
     *     alias?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
