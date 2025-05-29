<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateLocationObjectStorage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LocationArn
 * @property int<1, 65536>|null $ServerPort
 * @property 'HTTPS'|'HTTP'|null $ServerProtocol
 * @property string|null $Subdirectory
 * @property string|null $ServerHostname
 * @property string|null $AccessKey
 * @property string|null $SecretKey
 * @property list<string>|null $AgentArns
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $ServerCertificate
 * @property Shapes\CmkSecretConfig|null $CmkSecretConfig
 * @property Shapes\CustomSecretConfig|null $CustomSecretConfig
 */
class UpdateLocationObjectStorageRequest extends Request
{
    /**
     * @param array{
     *     LocationArn: string,
     *     ServerPort?: int<1, 65536>|null,
     *     ServerProtocol?: 'HTTPS'|'HTTP'|null,
     *     Subdirectory?: string|null,
     *     ServerHostname?: string|null,
     *     AccessKey?: string|null,
     *     SecretKey?: string|null,
     *     AgentArns?: list<string>|null,
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
