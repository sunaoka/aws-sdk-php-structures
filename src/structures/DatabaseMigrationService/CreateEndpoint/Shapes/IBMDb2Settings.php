<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\CreateEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DatabaseName
 * @property string $Password
 * @property int $Port
 * @property string $ServerName
 * @property bool $SetDataCaptureChanges
 * @property string $CurrentLsn
 * @property int $MaxKBytesPerRead
 * @property string $Username
 * @property string $SecretsManagerAccessRoleArn
 * @property string $SecretsManagerSecretId
 * @property int $LoadTimeout
 * @property int $WriteBufferSize
 * @property int $MaxFileSize
 * @property bool $KeepCsvFiles
 */
class IBMDb2Settings extends Shape
{
    /**
     * @param array{
     *     DatabaseName?: string,
     *     Password?: string,
     *     Port?: int,
     *     ServerName?: string,
     *     SetDataCaptureChanges?: bool,
     *     CurrentLsn?: string,
     *     MaxKBytesPerRead?: int,
     *     Username?: string,
     *     SecretsManagerAccessRoleArn?: string,
     *     SecretsManagerSecretId?: string,
     *     LoadTimeout?: int,
     *     WriteBufferSize?: int,
     *     MaxFileSize?: int,
     *     KeepCsvFiles?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
