<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateStorageSystem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StorageSystemArn
 * @property Shapes\DiscoveryServerConfiguration $ServerConfiguration
 * @property list<string> $AgentArns
 * @property string $Name
 * @property string $CloudWatchLogGroupArn
 * @property Shapes\Credentials $Credentials
 */
class UpdateStorageSystemRequest extends Request
{
    /**
     * @param array{
     *     StorageSystemArn: string,
     *     ServerConfiguration?: Shapes\DiscoveryServerConfiguration,
     *     AgentArns?: list<string>,
     *     Name?: string,
     *     CloudWatchLogGroupArn?: string,
     *     Credentials?: Shapes\Credentials
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
