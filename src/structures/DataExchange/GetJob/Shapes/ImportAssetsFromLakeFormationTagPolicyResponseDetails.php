<?php

namespace Sunaoka\Aws\Structures\DataExchange\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CatalogId
 * @property DatabaseLFTagPolicyAndPermissions|null $Database
 * @property TableLFTagPolicyAndPermissions|null $Table
 * @property string $RoleArn
 * @property string $DataSetId
 * @property string $RevisionId
 */
class ImportAssetsFromLakeFormationTagPolicyResponseDetails extends Shape
{
    /**
     * @param array{
     *     CatalogId: string,
     *     Database?: DatabaseLFTagPolicyAndPermissions|null,
     *     Table?: TableLFTagPolicyAndPermissions|null,
     *     RoleArn: string,
     *     DataSetId: string,
     *     RevisionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
