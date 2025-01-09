<?php

namespace Sunaoka\Aws\Structures\LakeFormation\PutDataLakeSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DataLakePrincipal> $DataLakeAdmins
 * @property list<DataLakePrincipal> $ReadOnlyAdmins
 * @property list<PrincipalPermissions> $CreateDatabaseDefaultPermissions
 * @property list<PrincipalPermissions> $CreateTableDefaultPermissions
 * @property array<string, string> $Parameters
 * @property list<string> $TrustedResourceOwners
 * @property bool $AllowExternalDataFiltering
 * @property bool $AllowFullTableExternalDataAccess
 * @property list<DataLakePrincipal> $ExternalDataFilteringAllowList
 * @property list<string> $AuthorizedSessionTagValueList
 */
class DataLakeSettings extends Shape
{
    /**
     * @param array{
     *     DataLakeAdmins?: list<DataLakePrincipal>,
     *     ReadOnlyAdmins?: list<DataLakePrincipal>,
     *     CreateDatabaseDefaultPermissions?: list<PrincipalPermissions>,
     *     CreateTableDefaultPermissions?: list<PrincipalPermissions>,
     *     Parameters?: array<string, string>,
     *     TrustedResourceOwners?: list<string>,
     *     AllowExternalDataFiltering?: bool,
     *     AllowFullTableExternalDataAccess?: bool,
     *     ExternalDataFilteringAllowList?: list<DataLakePrincipal>,
     *     AuthorizedSessionTagValueList?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
