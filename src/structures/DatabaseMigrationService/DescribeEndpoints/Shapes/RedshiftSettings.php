<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $AcceptAnyDate
 * @property string $AfterConnectScript
 * @property string $BucketFolder
 * @property string $BucketName
 * @property bool $CaseSensitiveNames
 * @property bool $CompUpdate
 * @property int $ConnectionTimeout
 * @property string $DatabaseName
 * @property string $DateFormat
 * @property bool $EmptyAsNull
 * @property 'sse-s3'|'sse-kms' $EncryptionMode
 * @property bool $ExplicitIds
 * @property int $FileTransferUploadStreams
 * @property int $LoadTimeout
 * @property int $MaxFileSize
 * @property string $Password
 * @property int $Port
 * @property bool $RemoveQuotes
 * @property string $ReplaceInvalidChars
 * @property string $ReplaceChars
 * @property string $ServerName
 * @property string $ServiceAccessRoleArn
 * @property string $ServerSideEncryptionKmsKeyId
 * @property string $TimeFormat
 * @property bool $TrimBlanks
 * @property bool $TruncateColumns
 * @property string $Username
 * @property int $WriteBufferSize
 * @property string $SecretsManagerAccessRoleArn
 * @property string $SecretsManagerSecretId
 * @property bool $MapBooleanAsBoolean
 */
class RedshiftSettings extends Shape
{
    /**
     * @param array{
     *     AcceptAnyDate?: bool,
     *     AfterConnectScript?: string,
     *     BucketFolder?: string,
     *     BucketName?: string,
     *     CaseSensitiveNames?: bool,
     *     CompUpdate?: bool,
     *     ConnectionTimeout?: int,
     *     DatabaseName?: string,
     *     DateFormat?: string,
     *     EmptyAsNull?: bool,
     *     EncryptionMode?: 'sse-s3'|'sse-kms',
     *     ExplicitIds?: bool,
     *     FileTransferUploadStreams?: int,
     *     LoadTimeout?: int,
     *     MaxFileSize?: int,
     *     Password?: string,
     *     Port?: int,
     *     RemoveQuotes?: bool,
     *     ReplaceInvalidChars?: string,
     *     ReplaceChars?: string,
     *     ServerName?: string,
     *     ServiceAccessRoleArn?: string,
     *     ServerSideEncryptionKmsKeyId?: string,
     *     TimeFormat?: string,
     *     TrimBlanks?: bool,
     *     TruncateColumns?: bool,
     *     Username?: string,
     *     WriteBufferSize?: int,
     *     SecretsManagerAccessRoleArn?: string,
     *     SecretsManagerSecretId?: string,
     *     MapBooleanAsBoolean?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
