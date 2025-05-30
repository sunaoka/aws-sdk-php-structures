<?php

namespace Sunaoka\Aws\Structures\DataSync\CreateLocationObjectStorage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServerHostname
 * @property int<1, 65536>|null $ServerPort
 * @property 'HTTPS'|'HTTP'|null $ServerProtocol
 * @property string|null $Subdirectory
 * @property string $BucketName
 * @property string|null $AccessKey
 * @property string|null $SecretKey
 * @property list<string>|null $AgentArns
 * @property list<Shapes\TagListEntry>|null $Tags
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $ServerCertificate
 * @property Shapes\CmkSecretConfig|null $CmkSecretConfig
 * @property Shapes\CustomSecretConfig|null $CustomSecretConfig
 */
class CreateLocationObjectStorageRequest extends Request
{
    /**
     * @param array{
     *     ServerHostname: string,
     *     ServerPort?: int<1, 65536>|null,
     *     ServerProtocol?: 'HTTPS'|'HTTP'|null,
     *     Subdirectory?: string|null,
     *     BucketName: string,
     *     AccessKey?: string|null,
     *     SecretKey?: string|null,
     *     AgentArns?: list<string>|null,
     *     Tags?: list<Shapes\TagListEntry>|null,
     *     ServerCertificate?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     CmkSecretConfig?: Shapes\CmkSecretConfig|null,
     *     CustomSecretConfig?: Shapes\CustomSecretConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
