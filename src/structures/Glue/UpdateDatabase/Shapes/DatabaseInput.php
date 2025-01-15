<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateDatabase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string|null $Description
 * @property string|null $LocationUri
 * @property array<string, string>|null $Parameters
 * @property list<PrincipalPermissions>|null $CreateTableDefaultPermissions
 * @property DatabaseIdentifier|null $TargetDatabase
 * @property FederatedDatabase|null $FederatedDatabase
 */
class DatabaseInput extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     LocationUri?: string|null,
     *     Parameters?: array<string, string>|null,
     *     CreateTableDefaultPermissions?: list<PrincipalPermissions>|null,
     *     TargetDatabase?: DatabaseIdentifier|null,
     *     FederatedDatabase?: FederatedDatabase|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
