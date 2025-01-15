<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\CreateEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AfterConnectScript
 * @property bool|null $CleanSourceMetadataOnMismatch
 * @property string|null $DatabaseName
 * @property int|null $EventsPollInterval
 * @property 'specific-database'|'multiple-databases'|null $TargetDbType
 * @property int|null $MaxFileSize
 * @property int|null $ParallelLoadThreads
 * @property string|null $Password
 * @property int|null $Port
 * @property string|null $ServerName
 * @property string|null $ServerTimezone
 * @property string|null $Username
 * @property string|null $SecretsManagerAccessRoleArn
 * @property string|null $SecretsManagerSecretId
 * @property int|null $ExecuteTimeout
 */
class MySQLSettings extends Shape
{
    /**
     * @param array{
     *     AfterConnectScript?: string|null,
     *     CleanSourceMetadataOnMismatch?: bool|null,
     *     DatabaseName?: string|null,
     *     EventsPollInterval?: int|null,
     *     TargetDbType?: 'specific-database'|'multiple-databases'|null,
     *     MaxFileSize?: int|null,
     *     ParallelLoadThreads?: int|null,
     *     Password?: string|null,
     *     Port?: int|null,
     *     ServerName?: string|null,
     *     ServerTimezone?: string|null,
     *     Username?: string|null,
     *     SecretsManagerAccessRoleArn?: string|null,
     *     SecretsManagerSecretId?: string|null,
     *     ExecuteTimeout?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
