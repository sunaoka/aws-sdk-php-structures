<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\CreateEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Username
 * @property string $Password
 * @property string $ServerName
 * @property int $Port
 * @property string $DatabaseName
 * @property 'none'|'one' $NestingLevel
 * @property bool $ExtractDocId
 * @property int $DocsToInvestigate
 * @property string $KmsKeyId
 * @property string $SecretsManagerAccessRoleArn
 * @property string $SecretsManagerSecretId
 * @property bool $UseUpdateLookUp
 * @property bool $ReplicateShardCollections
 */
class DocDbSettings extends Shape
{
    /**
     * @param array{
     *     Username?: string,
     *     Password?: string,
     *     ServerName?: string,
     *     Port?: int,
     *     DatabaseName?: string,
     *     NestingLevel?: 'none'|'one',
     *     ExtractDocId?: bool,
     *     DocsToInvestigate?: int,
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
