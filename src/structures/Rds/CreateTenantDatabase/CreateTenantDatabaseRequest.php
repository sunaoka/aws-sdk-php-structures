<?php

namespace Sunaoka\Aws\Structures\Rds\CreateTenantDatabase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBInstanceIdentifier
 * @property string $TenantDBName
 * @property string $MasterUsername
 * @property string $MasterUserPassword
 * @property string $CharacterSetName
 * @property string $NcharCharacterSetName
 * @property list<Shapes\Tag> $Tags
 */
class CreateTenantDatabaseRequest extends Request
{
    /**
     * @param array{
     *     DBInstanceIdentifier: string,
     *     TenantDBName: string,
     *     MasterUsername: string,
     *     MasterUserPassword: string,
     *     CharacterSetName?: string,
     *     NcharCharacterSetName?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
