<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateLocationObjectStorage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LocationArn
 * @property int $ServerPort
 * @property 'HTTPS'|'HTTP' $ServerProtocol
 * @property string $Subdirectory
 * @property string $AccessKey
 * @property string $SecretKey
 * @property list<string> $AgentArns
 * @property string $ServerCertificate
 */
class UpdateLocationObjectStorageRequest extends Request
{
    /**
     * @param array{
     *     LocationArn: string,
     *     ServerPort?: int,
     *     ServerProtocol?: 'HTTPS'|'HTTP',
     *     Subdirectory?: string,
     *     AccessKey?: string,
     *     SecretKey?: string,
     *     AgentArns?: list<string>,
     *     ServerCertificate?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
