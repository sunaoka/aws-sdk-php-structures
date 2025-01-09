<?php

namespace Sunaoka\Aws\Structures\DataSync\AddStorageSystem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DiscoveryServerConfiguration $ServerConfiguration
 * @property 'NetAppONTAP' $SystemType
 * @property list<string> $AgentArns
 * @property string $CloudWatchLogGroupArn
 * @property list<Shapes\TagListEntry> $Tags
 * @property string $Name
 * @property string $ClientToken
 * @property Shapes\Credentials $Credentials
 */
class AddStorageSystemRequest extends Request
{
    /**
     * @param array{
     *     ServerConfiguration: Shapes\DiscoveryServerConfiguration,
     *     SystemType: 'NetAppONTAP',
     *     AgentArns: list<string>,
     *     CloudWatchLogGroupArn?: string,
     *     Tags?: list<Shapes\TagListEntry>,
     *     Name?: string,
     *     ClientToken: string,
     *     Credentials: Shapes\Credentials
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
