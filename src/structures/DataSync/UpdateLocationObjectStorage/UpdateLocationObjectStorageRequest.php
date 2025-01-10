<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateLocationObjectStorage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LocationArn
 * @property int<1, 65536> $ServerPort
 * @property 'HTTPS'|'HTTP' $ServerProtocol
 * @property string $Subdirectory
 * @property string $AccessKey
 * @property string $SecretKey
 * @property list<string> $AgentArns
 * @property string|resource|\Psr\Http\Message\StreamInterface $ServerCertificate
 */
class UpdateLocationObjectStorageRequest extends Request
{
    /**
     * @param array{
     *     LocationArn: string,
     *     ServerPort?: int<1, 65536>,
     *     ServerProtocol?: 'HTTPS'|'HTTP',
     *     Subdirectory?: string,
     *     AccessKey?: string,
     *     SecretKey?: string,
     *     AgentArns?: list<string>,
     *     ServerCertificate?: string|resource|\Psr\Http\Message\StreamInterface
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
