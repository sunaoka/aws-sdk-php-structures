<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\ListDatasets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $datasetId
 * @property string|null $datasetArn
 * @property string|null $datasetTitle
 * @property 'TABULAR'|'NON_TABULAR'|null $kind
 * @property string|null $datasetDescription
 * @property DatasetOwnerInfo|null $ownerInfo
 * @property int|null $createTime
 * @property int|null $lastModifiedTime
 * @property SchemaUnion|null $schemaDefinition
 * @property string|null $alias
 */
class Dataset extends Shape
{
    /**
     * @param array{
     *     datasetId?: string|null,
     *     datasetArn?: string|null,
     *     datasetTitle?: string|null,
     *     kind?: 'TABULAR'|'NON_TABULAR'|null,
     *     datasetDescription?: string|null,
     *     ownerInfo?: DatasetOwnerInfo|null,
     *     createTime?: int|null,
     *     lastModifiedTime?: int|null,
     *     schemaDefinition?: SchemaUnion|null,
     *     alias?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
