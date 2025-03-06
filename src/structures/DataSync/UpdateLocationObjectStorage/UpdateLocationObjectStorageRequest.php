<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateLocationObjectStorage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LocationArn
 * @property int<1, 65536>|null $ServerPort
 * @property 'HTTPS'|'HTTP'|null $ServerProtocol
 * @property string|null $Subdirectory
 * @property string|null $AccessKey
 * @property string|null $SecretKey
 * @property list<string>|null $AgentArns
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $ServerCertificate
 */
class UpdateLocationObjectStorageRequest extends Request
{
    /**
     * @param array{
     *     LocationArn: string,
     *     ServerPort?: int<1, 65536>|null,
     *     ServerProtocol?: 'HTTPS'|'HTTP'|null,
     *     Subdirectory?: string|null,
     *     AccessKey?: string|null,
     *     SecretKey?: string|null,
     *     AgentArns?: list<string>|null,
     *     ServerCertificate?: string|resource|\Psr\Http\Message\StreamInterface|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
