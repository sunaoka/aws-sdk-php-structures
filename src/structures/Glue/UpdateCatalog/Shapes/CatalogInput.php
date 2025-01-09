<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateCatalog\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Description
 * @property FederatedCatalog $FederatedCatalog
 * @property array<string, string> $Parameters
 * @property TargetRedshiftCatalog $TargetRedshiftCatalog
 * @property CatalogProperties $CatalogProperties
 * @property list<PrincipalPermissions> $CreateTableDefaultPermissions
 * @property list<PrincipalPermissions> $CreateDatabaseDefaultPermissions
 */
class CatalogInput extends Shape
{
    /**
     * @param array{
     *     Description?: string,
     *     FederatedCatalog?: FederatedCatalog,
     *     Parameters?: array<string, string>,
     *     TargetRedshiftCatalog?: TargetRedshiftCatalog,
     *     CatalogProperties?: CatalogProperties,
     *     CreateTableDefaultPermissions?: list<PrincipalPermissions>,
     *     CreateDatabaseDefaultPermissions?: list<PrincipalPermissions>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
