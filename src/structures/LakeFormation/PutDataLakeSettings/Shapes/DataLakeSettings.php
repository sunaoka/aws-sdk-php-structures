<?php

namespace Sunaoka\Aws\Structures\LakeFormation\PutDataLakeSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DataLakePrincipal>|null $DataLakeAdmins
 * @property list<DataLakePrincipal>|null $ReadOnlyAdmins
 * @property list<PrincipalPermissions>|null $CreateDatabaseDefaultPermissions
 * @property list<PrincipalPermissions>|null $CreateTableDefaultPermissions
 * @property array<string, string>|null $Parameters
 * @property list<string>|null $TrustedResourceOwners
 * @property bool|null $AllowExternalDataFiltering
 * @property bool|null $AllowFullTableExternalDataAccess
 * @property list<DataLakePrincipal>|null $ExternalDataFilteringAllowList
 * @property list<string>|null $AuthorizedSessionTagValueList
 */
class DataLakeSettings extends Shape
{
    /**
     * @param array{
     *     DataLakeAdmins?: list<DataLakePrincipal>|null,
     *     ReadOnlyAdmins?: list<DataLakePrincipal>|null,
     *     CreateDatabaseDefaultPermissions?: list<PrincipalPermissions>|null,
     *     CreateTableDefaultPermissions?: list<PrincipalPermissions>|null,
     *     Parameters?: array<string, string>|null,
     *     TrustedResourceOwners?: list<string>|null,
     *     AllowExternalDataFiltering?: bool|null,
     *     AllowFullTableExternalDataAccess?: bool|null,
     *     ExternalDataFilteringAllowList?: list<DataLakePrincipal>|null,
     *     AuthorizedSessionTagValueList?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
