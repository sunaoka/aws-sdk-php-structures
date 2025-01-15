<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\CreateDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $datasetTitle
 * @property 'TABULAR'|'NON_TABULAR' $kind
 * @property string|null $datasetDescription
 * @property Shapes\DatasetOwnerInfo|null $ownerInfo
 * @property Shapes\PermissionGroupParams $permissionGroupParams
 * @property string|null $alias
 * @property Shapes\SchemaUnion|null $schemaDefinition
 */
class CreateDatasetRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     datasetTitle: string,
     *     kind: 'TABULAR'|'NON_TABULAR',
     *     datasetDescription?: string|null,
     *     ownerInfo?: Shapes\DatasetOwnerInfo|null,
     *     permissionGroupParams: Shapes\PermissionGroupParams,
     *     alias?: string|null,
     *     schemaDefinition?: Shapes\SchemaUnion|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
