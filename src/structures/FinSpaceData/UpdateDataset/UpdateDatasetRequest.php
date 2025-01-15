<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\UpdateDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $datasetId
 * @property string $datasetTitle
 * @property 'TABULAR'|'NON_TABULAR' $kind
 * @property string|null $datasetDescription
 * @property string|null $alias
 * @property Shapes\SchemaUnion|null $schemaDefinition
 */
class UpdateDatasetRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     datasetId: string,
     *     datasetTitle: string,
     *     kind: 'TABULAR'|'NON_TABULAR',
     *     datasetDescription?: string|null,
     *     alias?: string|null,
     *     schemaDefinition?: Shapes\SchemaUnion|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
