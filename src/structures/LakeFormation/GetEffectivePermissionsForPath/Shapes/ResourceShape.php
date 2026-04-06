<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetEffectivePermissionsForPath\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CatalogResource|null $Catalog
 * @property DatabaseResource|null $Database
 * @property TableResource|null $Table
 * @property TableWithColumnsResource|null $TableWithColumns
 * @property DataLocationResource|null $DataLocation
 * @property DataCellsFilterResource|null $DataCellsFilter
 * @property LFTagKeyResource|null $LFTag
 * @property LFTagPolicyResource|null $LFTagPolicy
 * @property LFTagExpressionResource|null $LFTagExpression
 */
class ResourceShape extends Shape
{
    /**
     * @param array{
     *     Catalog?: CatalogResource|null,
     *     Database?: DatabaseResource|null,
     *     Table?: TableResource|null,
     *     TableWithColumns?: TableWithColumnsResource|null,
     *     DataLocation?: DataLocationResource|null,
     *     DataCellsFilter?: DataCellsFilterResource|null,
     *     LFTag?: LFTagKeyResource|null,
     *     LFTagPolicy?: LFTagPolicyResource|null,
     *     LFTagExpression?: LFTagExpressionResource|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
