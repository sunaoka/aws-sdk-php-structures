<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\UpdateDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $datasetId
 * @property string $datasetTitle
 * @property 'TABULAR'|'NON_TABULAR' $kind
 * @property string $datasetDescription
 * @property string $alias
 * @property Shapes\SchemaUnion $schemaDefinition
 */
class UpdateDatasetRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     datasetId: string,
     *     datasetTitle: string,
     *     kind: 'TABULAR'|'NON_TABULAR',
     *     datasetDescription?: string,
     *     alias?: string,
     *     schemaDefinition?: Shapes\SchemaUnion
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
