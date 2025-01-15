<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\CreateEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Username
 * @property string|null $Password
 * @property string|null $ServerName
 * @property int|null $Port
 * @property string|null $DatabaseName
 * @property 'no'|'password'|null $AuthType
 * @property 'default'|'mongodb_cr'|'scram_sha_1'|null $AuthMechanism
 * @property 'none'|'one'|null $NestingLevel
 * @property string|null $ExtractDocId
 * @property string|null $DocsToInvestigate
 * @property string|null $AuthSource
 * @property string|null $KmsKeyId
 * @property string|null $SecretsManagerAccessRoleArn
 * @property string|null $SecretsManagerSecretId
 * @property bool|null $UseUpdateLookUp
 * @property bool|null $ReplicateShardCollections
 */
class MongoDbSettings extends Shape
{
    /**
     * @param array{
     *     Username?: string|null,
     *     Password?: string|null,
     *     ServerName?: string|null,
     *     Port?: int|null,
     *     DatabaseName?: string|null,
     *     AuthType?: 'no'|'password'|null,
     *     AuthMechanism?: 'default'|'mongodb_cr'|'scram_sha_1'|null,
     *     NestingLevel?: 'none'|'one'|null,
     *     ExtractDocId?: string|null,
     *     DocsToInvestigate?: string|null,
     *     AuthSource?: string|null,
     *     KmsKeyId?: string|null,
     *     SecretsManagerAccessRoleArn?: string|null,
     *     SecretsManagerSecretId?: string|null,
     *     UseUpdateLookUp?: bool|null,
     *     ReplicateShardCollections?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
