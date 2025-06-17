<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DeleteDataProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ServerName
 * @property int|null $Port
 * @property string|null $DatabaseName
 * @property 'none'|'require'|'verify-ca'|'verify-full'|null $SslMode
 * @property string|null $CertificateArn
 * @property string|null $AsmServer
 * @property string|null $SecretsManagerOracleAsmSecretId
 * @property string|null $SecretsManagerOracleAsmAccessRoleArn
 * @property string|null $SecretsManagerSecurityDbEncryptionSecretId
 * @property string|null $SecretsManagerSecurityDbEncryptionAccessRoleArn
 * @property string|null $S3Path
 * @property string|null $S3AccessRoleArn
 */
class OracleDataProviderSettings extends Shape
{
    /**
     * @param array{
     *     ServerName?: string|null,
     *     Port?: int|null,
     *     DatabaseName?: string|null,
     *     SslMode?: 'none'|'require'|'verify-ca'|'verify-full'|null,
     *     CertificateArn?: string|null,
     *     AsmServer?: string|null,
     *     SecretsManagerOracleAsmSecretId?: string|null,
     *     SecretsManagerOracleAsmAccessRoleArn?: string|null,
     *     SecretsManagerSecurityDbEncryptionSecretId?: string|null,
     *     SecretsManagerSecurityDbEncryptionAccessRoleArn?: string|null,
     *     S3Path?: string|null,
     *     S3AccessRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
