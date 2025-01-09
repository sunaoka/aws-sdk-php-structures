<?php

namespace Sunaoka\Aws\Structures\DataSync\CreateLocationObjectStorage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServerHostname
 * @property int $ServerPort
 * @property 'HTTPS'|'HTTP' $ServerProtocol
 * @property string $Subdirectory
 * @property string $BucketName
 * @property string $AccessKey
 * @property string $SecretKey
 * @property list<string> $AgentArns
 * @property list<Shapes\TagListEntry> $Tags
 * @property string $ServerCertificate
 */
class CreateLocationObjectStorageRequest extends Request
{
    /**
     * @param array{
     *     ServerHostname: string,
     *     ServerPort?: int,
     *     ServerProtocol?: 'HTTPS'|'HTTP',
     *     Subdirectory?: string,
     *     BucketName: string,
     *     AccessKey?: string,
     *     SecretKey?: string,
     *     AgentArns: list<string>,
     *     Tags?: list<Shapes\TagListEntry>,
     *     ServerCertificate?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
