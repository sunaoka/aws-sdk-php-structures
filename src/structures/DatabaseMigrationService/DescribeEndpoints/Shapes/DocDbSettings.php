<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Username
 * @property string|null $Password
 * @property string|null $ServerName
 * @property int|null $Port
 * @property string|null $DatabaseName
 * @property 'none'|'one'|null $NestingLevel
 * @property bool|null $ExtractDocId
 * @property int|null $DocsToInvestigate
 * @property string|null $KmsKeyId
 * @property string|null $SecretsManagerAccessRoleArn
 * @property string|null $SecretsManagerSecretId
 * @property bool|null $UseUpdateLookUp
 * @property bool|null $ReplicateShardCollections
 */
class DocDbSettings extends Shape
{
    /**
     * @param array{
     *     Username?: string|null,
     *     Password?: string|null,
     *     ServerName?: string|null,
     *     Port?: int|null,
     *     DatabaseName?: string|null,
     *     NestingLevel?: 'none'|'one'|null,
     *     ExtractDocId?: bool|null,
     *     DocsToInvestigate?: int|null,
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
