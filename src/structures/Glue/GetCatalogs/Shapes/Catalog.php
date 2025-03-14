<?php

namespace Sunaoka\Aws\Structures\Glue\GetCatalogs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CatalogId
 * @property string $Name
 * @property string|null $ResourceArn
 * @property string|null $Description
 * @property array<string, string>|null $Parameters
 * @property \Aws\Api\DateTimeResult|null $CreateTime
 * @property \Aws\Api\DateTimeResult|null $UpdateTime
 * @property TargetRedshiftCatalog|null $TargetRedshiftCatalog
 * @property FederatedCatalog|null $FederatedCatalog
 * @property CatalogPropertiesOutput|null $CatalogProperties
 * @property list<PrincipalPermissions>|null $CreateTableDefaultPermissions
 * @property list<PrincipalPermissions>|null $CreateDatabaseDefaultPermissions
 * @property 'True'|'False'|null $AllowFullTableExternalDataAccess
 */
class Catalog extends Shape
{
    /**
     * @param array{
     *     CatalogId?: string|null,
     *     Name: string,
     *     ResourceArn?: string|null,
     *     Description?: string|null,
     *     Parameters?: array<string, string>|null,
     *     CreateTime?: \Aws\Api\DateTimeResult|null,
     *     UpdateTime?: \Aws\Api\DateTimeResult|null,
     *     TargetRedshiftCatalog?: TargetRedshiftCatalog|null,
     *     FederatedCatalog?: FederatedCatalog|null,
     *     CatalogProperties?: CatalogPropertiesOutput|null,
     *     CreateTableDefaultPermissions?: list<PrincipalPermissions>|null,
     *     CreateDatabaseDefaultPermissions?: list<PrincipalPermissions>|null,
     *     AllowFullTableExternalDataAccess?: 'True'|'False'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
