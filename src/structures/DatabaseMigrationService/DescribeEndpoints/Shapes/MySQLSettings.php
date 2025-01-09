<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AfterConnectScript
 * @property bool $CleanSourceMetadataOnMismatch
 * @property string $DatabaseName
 * @property int $EventsPollInterval
 * @property 'specific-database'|'multiple-databases' $TargetDbType
 * @property int $MaxFileSize
 * @property int $ParallelLoadThreads
 * @property string $Password
 * @property int $Port
 * @property string $ServerName
 * @property string $ServerTimezone
 * @property string $Username
 * @property string $SecretsManagerAccessRoleArn
 * @property string $SecretsManagerSecretId
 * @property int $ExecuteTimeout
 */
class MySQLSettings extends Shape
{
    /**
     * @param array{
     *     AfterConnectScript?: string,
     *     CleanSourceMetadataOnMismatch?: bool,
     *     DatabaseName?: string,
     *     EventsPollInterval?: int,
     *     TargetDbType?: 'specific-database'|'multiple-databases',
     *     MaxFileSize?: int,
     *     ParallelLoadThreads?: int,
     *     Password?: string,
     *     Port?: int,
     *     ServerName?: string,
     *     ServerTimezone?: string,
     *     Username?: string,
     *     SecretsManagerAccessRoleArn?: string,
     *     SecretsManagerSecretId?: string,
     *     ExecuteTimeout?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
