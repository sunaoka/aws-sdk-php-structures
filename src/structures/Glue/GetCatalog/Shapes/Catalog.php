<?php

namespace Sunaoka\Aws\Structures\Glue\GetCatalog\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CatalogId
 * @property string $Name
 * @property string $ResourceArn
 * @property string $Description
 * @property array<string, string> $Parameters
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property \Aws\Api\DateTimeResult $UpdateTime
 * @property TargetRedshiftCatalog $TargetRedshiftCatalog
 * @property FederatedCatalog $FederatedCatalog
 * @property CatalogPropertiesOutput $CatalogProperties
 * @property list<PrincipalPermissions> $CreateTableDefaultPermissions
 * @property list<PrincipalPermissions> $CreateDatabaseDefaultPermissions
 */
class Catalog extends Shape
{
    /**
     * @param array{
     *     CatalogId?: string,
     *     Name: string,
     *     ResourceArn?: string,
     *     Description?: string,
     *     Parameters?: array<string, string>,
     *     CreateTime?: \Aws\Api\DateTimeResult,
     *     UpdateTime?: \Aws\Api\DateTimeResult,
     *     TargetRedshiftCatalog?: TargetRedshiftCatalog,
     *     FederatedCatalog?: FederatedCatalog,
     *     CatalogProperties?: CatalogPropertiesOutput,
     *     CreateTableDefaultPermissions?: list<PrincipalPermissions>,
     *     CreateDatabaseDefaultPermissions?: list<PrincipalPermissions>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
