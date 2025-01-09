<?php

namespace Sunaoka\Aws\Structures\Glue\GetDatabase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Description
 * @property string $LocationUri
 * @property array<string, string> $Parameters
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property list<PrincipalPermissions> $CreateTableDefaultPermissions
 * @property DatabaseIdentifier $TargetDatabase
 * @property string $CatalogId
 * @property FederatedDatabase $FederatedDatabase
 */
class Database extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string,
     *     LocationUri?: string,
     *     Parameters?: array<string, string>,
     *     CreateTime?: \Aws\Api\DateTimeResult,
     *     CreateTableDefaultPermissions?: list<PrincipalPermissions>,
     *     TargetDatabase?: DatabaseIdentifier,
     *     CatalogId?: string,
     *     FederatedDatabase?: FederatedDatabase
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
