<?php

namespace Sunaoka\Aws\Structures\SecretsManager\CreateSecret;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $ClientRequestToken
 * @property string|null $Description
 * @property string|null $KmsKeyId
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $SecretBinary
 * @property string|null $SecretString
 * @property list<Shapes\Tag>|null $Tags
 * @property list<Shapes\ReplicaRegionType>|null $AddReplicaRegions
 * @property bool|null $ForceOverwriteReplicaSecret
 * @property string|null $Type
 */
class CreateSecretRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     ClientRequestToken?: string|null,
     *     Description?: string|null,
     *     KmsKeyId?: string|null,
     *     SecretBinary?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     SecretString?: string|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     AddReplicaRegions?: list<Shapes\ReplicaRegionType>|null,
     *     ForceOverwriteReplicaSecret?: bool|null,
     *     Type?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
