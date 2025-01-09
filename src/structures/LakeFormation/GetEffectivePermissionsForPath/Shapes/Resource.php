<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetEffectivePermissionsForPath\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CatalogResource $Catalog
 * @property DatabaseResource $Database
 * @property TableResource $Table
 * @property TableWithColumnsResource $TableWithColumns
 * @property DataLocationResource $DataLocation
 * @property DataCellsFilterResource $DataCellsFilter
 * @property LFTagKeyResource $LFTag
 * @property LFTagPolicyResource $LFTagPolicy
 * @property LFTagExpressionResource $LFTagExpression
 */
class Resource extends Shape
{
    /**
     * @param array{
     *     Catalog?: CatalogResource,
     *     Database?: DatabaseResource,
     *     Table?: TableResource,
     *     TableWithColumns?: TableWithColumnsResource,
     *     DataLocation?: DataLocationResource,
     *     DataCellsFilter?: DataCellsFilterResource,
     *     LFTag?: LFTagKeyResource,
     *     LFTagPolicy?: LFTagPolicyResource,
     *     LFTagExpression?: LFTagExpressionResource
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
