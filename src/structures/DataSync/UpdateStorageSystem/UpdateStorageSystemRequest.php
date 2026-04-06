<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateStorageSystem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StorageSystemArn
 * @property Shapes\DiscoveryServerConfiguration|null $ServerConfiguration
 * @property list<string>|null $AgentArns
 * @property string|null $Name
 * @property string|null $CloudWatchLogGroupArn
 * @property Shapes\Credentials|null $Credentials
 */
class UpdateStorageSystemRequest extends Request
{
    /**
     * @param array{
     *     StorageSystemArn: string,
     *     ServerConfiguration?: Shapes\DiscoveryServerConfiguration|null,
     *     AgentArns?: list<string>|null,
     *     Name?: string|null,
     *     CloudWatchLogGroupArn?: string|null,
     *     Credentials?: Shapes\Credentials|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
