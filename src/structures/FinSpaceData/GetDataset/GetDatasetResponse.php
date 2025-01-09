<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\GetDataset;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $datasetId
 * @property string $datasetArn
 * @property string $datasetTitle
 * @property 'TABULAR'|'NON_TABULAR' $kind
 * @property string $datasetDescription
 * @property int $createTime
 * @property int $lastModifiedTime
 * @property Shapes\SchemaUnion $schemaDefinition
 * @property string $alias
 * @property 'PENDING'|'FAILED'|'SUCCESS'|'RUNNING' $status
 */
class GetDatasetResponse extends Response
{
}
