<?php

namespace Sunaoka\Aws\Structures\SecretsManager\CreateSecret;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $ClientRequestToken
 * @property string $Description
 * @property string $KmsKeyId
 * @property string|resource|\Psr\Http\Message\StreamInterface $SecretBinary
 * @property string $SecretString
 * @property list<Shapes\Tag> $Tags
 * @property list<Shapes\ReplicaRegionType> $AddReplicaRegions
 * @property bool $ForceOverwriteReplicaSecret
 */
class CreateSecretRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     ClientRequestToken?: string,
     *     Description?: string,
     *     KmsKeyId?: string,
     *     SecretBinary?: string|resource|\Psr\Http\Message\StreamInterface,
     *     SecretString?: string,
     *     Tags?: list<Shapes\Tag>,
     *     AddReplicaRegions?: list<Shapes\ReplicaRegionType>,
     *     ForceOverwriteReplicaSecret?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
