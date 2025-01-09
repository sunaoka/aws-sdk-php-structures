<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DeleteEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Username
 * @property string $Password
 * @property string $ServerName
 * @property int $Port
 * @property string $DatabaseName
 * @property 'no'|'password' $AuthType
 * @property 'default'|'mongodb_cr'|'scram_sha_1' $AuthMechanism
 * @property 'none'|'one' $NestingLevel
 * @property string $ExtractDocId
 * @property string $DocsToInvestigate
 * @property string $AuthSource
 * @property string $KmsKeyId
 * @property string $SecretsManagerAccessRoleArn
 * @property string $SecretsManagerSecretId
 * @property bool $UseUpdateLookUp
 * @property bool $ReplicateShardCollections
 */
class MongoDbSettings extends Shape
{
    /**
     * @param array{
     *     Username?: string,
     *     Password?: string,
     *     ServerName?: string,
     *     Port?: int,
     *     DatabaseName?: string,
     *     AuthType?: 'no'|'password',
     *     AuthMechanism?: 'default'|'mongodb_cr'|'scram_sha_1',
     *     NestingLevel?: 'none'|'one',
     *     ExtractDocId?: string,
     *     DocsToInvestigate?: string,
     *     AuthSource?: string,
     *     KmsKeyId?: string,
     *     SecretsManagerAccessRoleArn?: string,
     *     SecretsManagerSecretId?: string,
     *     UseUpdateLookUp?: bool,
     *     ReplicateShardCollections?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
