<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateCatalog\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property FederatedCatalog|null $FederatedCatalog
 * @property array<string, string>|null $Parameters
 * @property TargetRedshiftCatalog|null $TargetRedshiftCatalog
 * @property CatalogProperties|null $CatalogProperties
 * @property list<PrincipalPermissions>|null $CreateTableDefaultPermissions
 * @property list<PrincipalPermissions>|null $CreateDatabaseDefaultPermissions
 * @property 'True'|'False'|null $AllowFullTableExternalDataAccess
 */
class CatalogInput extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     FederatedCatalog?: FederatedCatalog|null,
     *     Parameters?: array<string, string>|null,
     *     TargetRedshiftCatalog?: TargetRedshiftCatalog|null,
     *     CatalogProperties?: CatalogProperties|null,
     *     CreateTableDefaultPermissions?: list<PrincipalPermissions>|null,
     *     CreateDatabaseDefaultPermissions?: list<PrincipalPermissions>|null,
     *     AllowFullTableExternalDataAccess?: 'True'|'False'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
