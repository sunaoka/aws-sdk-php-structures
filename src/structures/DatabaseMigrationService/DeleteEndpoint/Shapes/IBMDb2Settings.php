<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DeleteEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DatabaseName
 * @property string|null $Password
 * @property int|null $Port
 * @property string|null $ServerName
 * @property bool|null $SetDataCaptureChanges
 * @property string|null $CurrentLsn
 * @property int|null $MaxKBytesPerRead
 * @property string|null $Username
 * @property string|null $SecretsManagerAccessRoleArn
 * @property string|null $SecretsManagerSecretId
 * @property int|null $LoadTimeout
 * @property int|null $WriteBufferSize
 * @property int|null $MaxFileSize
 * @property bool|null $KeepCsvFiles
 */
class IBMDb2Settings extends Shape
{
    /**
     * @param array{
     *     DatabaseName?: string|null,
     *     Password?: string|null,
     *     Port?: int|null,
     *     ServerName?: string|null,
     *     SetDataCaptureChanges?: bool|null,
     *     CurrentLsn?: string|null,
     *     MaxKBytesPerRead?: int|null,
     *     Username?: string|null,
     *     SecretsManagerAccessRoleArn?: string|null,
     *     SecretsManagerSecretId?: string|null,
     *     LoadTimeout?: int|null,
     *     WriteBufferSize?: int|null,
     *     MaxFileSize?: int|null,
     *     KeepCsvFiles?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
