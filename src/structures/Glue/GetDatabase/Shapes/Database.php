<?php

namespace Sunaoka\Aws\Structures\Glue\GetDatabase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string|null $Description
 * @property string|null $LocationUri
 * @property array<string, string>|null $Parameters
 * @property \Aws\Api\DateTimeResult|null $CreateTime
 * @property list<PrincipalPermissions>|null $CreateTableDefaultPermissions
 * @property DatabaseIdentifier|null $TargetDatabase
 * @property string|null $CatalogId
 * @property FederatedDatabase|null $FederatedDatabase
 */
class Database extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     LocationUri?: string|null,
     *     Parameters?: array<string, string>|null,
     *     CreateTime?: \Aws\Api\DateTimeResult|null,
     *     CreateTableDefaultPermissions?: list<PrincipalPermissions>|null,
     *     TargetDatabase?: DatabaseIdentifier|null,
     *     CatalogId?: string|null,
     *     FederatedDatabase?: FederatedDatabase|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
