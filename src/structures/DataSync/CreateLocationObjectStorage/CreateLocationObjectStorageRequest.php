<?php

namespace Sunaoka\Aws\Structures\DataSync\CreateLocationObjectStorage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServerHostname
 * @property int<1, 65536> $ServerPort
 * @property 'HTTPS'|'HTTP' $ServerProtocol
 * @property string $Subdirectory
 * @property string $BucketName
 * @property string $AccessKey
 * @property string $SecretKey
 * @property list<string> $AgentArns
 * @property list<Shapes\TagListEntry> $Tags
 * @property string|resource|\Psr\Http\Message\StreamInterface $ServerCertificate
 */
class CreateLocationObjectStorageRequest extends Request
{
    /**
     * @param array{
     *     ServerHostname: string,
     *     ServerPort?: int<1, 65536>,
     *     ServerProtocol?: 'HTTPS'|'HTTP',
     *     Subdirectory?: string,
     *     BucketName: string,
     *     AccessKey?: string,
     *     SecretKey?: string,
     *     AgentArns: list<string>,
     *     Tags?: list<Shapes\TagListEntry>,
     *     ServerCertificate?: string|resource|\Psr\Http\Message\StreamInterface
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
