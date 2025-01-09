<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateDatabase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Description
 * @property string $LocationUri
 * @property array<string, string> $Parameters
 * @property list<PrincipalPermissions> $CreateTableDefaultPermissions
 * @property DatabaseIdentifier $TargetDatabase
 * @property FederatedDatabase $FederatedDatabase
 */
class DatabaseInput extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string,
     *     LocationUri?: string,
     *     Parameters?: array<string, string>,
     *     CreateTableDefaultPermissions?: list<PrincipalPermissions>,
     *     TargetDatabase?: DatabaseIdentifier,
     *     FederatedDatabase?: FederatedDatabase
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
