<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DeleteDataProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ServerName
 * @property int $Port
 * @property string $DatabaseName
 * @property 'none'|'require'|'verify-ca'|'verify-full' $SslMode
 * @property string $CertificateArn
 * @property string $AsmServer
 * @property string $SecretsManagerOracleAsmSecretId
 * @property string $SecretsManagerOracleAsmAccessRoleArn
 * @property string $SecretsManagerSecurityDbEncryptionSecretId
 * @property string $SecretsManagerSecurityDbEncryptionAccessRoleArn
 */
class OracleDataProviderSettings extends Shape
{
    /**
     * @param array{
     *     ServerName?: string,
     *     Port?: int,
     *     DatabaseName?: string,
     *     SslMode?: 'none'|'require'|'verify-ca'|'verify-full',
     *     CertificateArn?: string,
     *     AsmServer?: string,
     *     SecretsManagerOracleAsmSecretId?: string,
     *     SecretsManagerOracleAsmAccessRoleArn?: string,
     *     SecretsManagerSecurityDbEncryptionSecretId?: string,
     *     SecretsManagerSecurityDbEncryptionAccessRoleArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
