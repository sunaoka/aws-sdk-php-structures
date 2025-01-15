<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\GetDataset;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $datasetId
 * @property string|null $datasetArn
 * @property string|null $datasetTitle
 * @property 'TABULAR'|'NON_TABULAR'|null $kind
 * @property string|null $datasetDescription
 * @property int|null $createTime
 * @property int|null $lastModifiedTime
 * @property Shapes\SchemaUnion|null $schemaDefinition
 * @property string|null $alias
 * @property 'PENDING'|'FAILED'|'SUCCESS'|'RUNNING'|null $status
 */
class GetDatasetResponse extends Response
{
}
