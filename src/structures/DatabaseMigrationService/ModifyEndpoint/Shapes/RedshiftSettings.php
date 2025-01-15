<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\ModifyEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $AcceptAnyDate
 * @property string|null $AfterConnectScript
 * @property string|null $BucketFolder
 * @property string|null $BucketName
 * @property bool|null $CaseSensitiveNames
 * @property bool|null $CompUpdate
 * @property int|null $ConnectionTimeout
 * @property string|null $DatabaseName
 * @property string|null $DateFormat
 * @property bool|null $EmptyAsNull
 * @property 'sse-s3'|'sse-kms'|null $EncryptionMode
 * @property bool|null $ExplicitIds
 * @property int|null $FileTransferUploadStreams
 * @property int|null $LoadTimeout
 * @property int|null $MaxFileSize
 * @property string|null $Password
 * @property int|null $Port
 * @property bool|null $RemoveQuotes
 * @property string|null $ReplaceInvalidChars
 * @property string|null $ReplaceChars
 * @property string|null $ServerName
 * @property string|null $ServiceAccessRoleArn
 * @property string|null $ServerSideEncryptionKmsKeyId
 * @property string|null $TimeFormat
 * @property bool|null $TrimBlanks
 * @property bool|null $TruncateColumns
 * @property string|null $Username
 * @property int|null $WriteBufferSize
 * @property string|null $SecretsManagerAccessRoleArn
 * @property string|null $SecretsManagerSecretId
 * @property bool|null $MapBooleanAsBoolean
 */
class RedshiftSettings extends Shape
{
    /**
     * @param array{
     *     AcceptAnyDate?: bool|null,
     *     AfterConnectScript?: string|null,
     *     BucketFolder?: string|null,
     *     BucketName?: string|null,
     *     CaseSensitiveNames?: bool|null,
     *     CompUpdate?: bool|null,
     *     ConnectionTimeout?: int|null,
     *     DatabaseName?: string|null,
     *     DateFormat?: string|null,
     *     EmptyAsNull?: bool|null,
     *     EncryptionMode?: 'sse-s3'|'sse-kms'|null,
     *     ExplicitIds?: bool|null,
     *     FileTransferUploadStreams?: int|null,
     *     LoadTimeout?: int|null,
     *     MaxFileSize?: int|null,
     *     Password?: string|null,
     *     Port?: int|null,
     *     RemoveQuotes?: bool|null,
     *     ReplaceInvalidChars?: string|null,
     *     ReplaceChars?: string|null,
     *     ServerName?: string|null,
     *     ServiceAccessRoleArn?: string|null,
     *     ServerSideEncryptionKmsKeyId?: string|null,
     *     TimeFormat?: string|null,
     *     TrimBlanks?: bool|null,
     *     TruncateColumns?: bool|null,
     *     Username?: string|null,
     *     WriteBufferSize?: int|null,
     *     SecretsManagerAccessRoleArn?: string|null,
     *     SecretsManagerSecretId?: string|null,
     *     MapBooleanAsBoolean?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
