<?php

namespace Sunaoka\Aws\Structures\Rds\CreateTenantDatabase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBInstanceIdentifier
 * @property string $TenantDBName
 * @property string $MasterUsername
 * @property string|null $MasterUserPassword
 * @property string|null $CharacterSetName
 * @property string|null $NcharCharacterSetName
 * @property bool|null $ManageMasterUserPassword
 * @property string|null $MasterUserSecretKmsKeyId
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateTenantDatabaseRequest extends Request
{
    /**
     * @param array{
     *     DBInstanceIdentifier: string,
     *     TenantDBName: string,
     *     MasterUsername: string,
     *     MasterUserPassword?: string|null,
     *     CharacterSetName?: string|null,
     *     NcharCharacterSetName?: string|null,
     *     ManageMasterUserPassword?: bool|null,
     *     MasterUserSecretKmsKeyId?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
