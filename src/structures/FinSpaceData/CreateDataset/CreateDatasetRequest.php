<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\CreateDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $datasetTitle
 * @property 'TABULAR'|'NON_TABULAR' $kind
 * @property string $datasetDescription
 * @property Shapes\DatasetOwnerInfo $ownerInfo
 * @property Shapes\PermissionGroupParams $permissionGroupParams
 * @property string $alias
 * @property Shapes\SchemaUnion $schemaDefinition
 */
class CreateDatasetRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     datasetTitle: string,
     *     kind: 'TABULAR'|'NON_TABULAR',
     *     datasetDescription?: string,
     *     ownerInfo?: Shapes\DatasetOwnerInfo,
     *     permissionGroupParams: Shapes\PermissionGroupParams,
     *     alias?: string,
     *     schemaDefinition?: Shapes\SchemaUnion
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
