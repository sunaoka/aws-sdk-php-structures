<?php

namespace Sunaoka\Aws\Structures\LakeFormation\DeleteLakeFormationOptIn\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AnyResource|null $AnyResource
 * @property CatalogResource|null $Catalog
 * @property DatabaseResource|null $Database
 * @property TableResource|null $Table
 * @property TableWithColumnsResource|null $TableWithColumns
 * @property DataLocationResource|null $DataLocation
 * @property DataCellsFilterResource|null $DataCellsFilter
 * @property LFTagKeyResource|null $LFTag
 * @property LFTagPolicyResource|null $LFTagPolicy
 * @property LFTagExpressionResource|null $LFTagExpression
 * @property RLSPolicyResource|null $RLSPolicy
 * @property UserDefinedFunctionResource|null $UserDefinedFunction
 */
class ResourceShape extends Shape
{
    /**
     * @param array{
     *     AnyResource?: AnyResource|null,
     *     Catalog?: CatalogResource|null,
     *     Database?: DatabaseResource|null,
     *     Table?: TableResource|null,
     *     TableWithColumns?: TableWithColumnsResource|null,
     *     DataLocation?: DataLocationResource|null,
     *     DataCellsFilter?: DataCellsFilterResource|null,
     *     LFTag?: LFTagKeyResource|null,
     *     LFTagPolicy?: LFTagPolicyResource|null,
     *     LFTagExpression?: LFTagExpressionResource|null,
     *     RLSPolicy?: RLSPolicyResource|null,
     *     UserDefinedFunction?: UserDefinedFunctionResource|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
