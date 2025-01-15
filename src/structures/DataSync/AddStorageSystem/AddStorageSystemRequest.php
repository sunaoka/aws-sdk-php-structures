<?php

namespace Sunaoka\Aws\Structures\DataSync\AddStorageSystem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DiscoveryServerConfiguration $ServerConfiguration
 * @property 'NetAppONTAP' $SystemType
 * @property list<string> $AgentArns
 * @property string|null $CloudWatchLogGroupArn
 * @property list<Shapes\TagListEntry>|null $Tags
 * @property string|null $Name
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
     *     CloudWatchLogGroupArn?: string|null,
     *     Tags?: list<Shapes\TagListEntry>|null,
     *     Name?: string|null,
     *     ClientToken: string,
     *     Credentials: Shapes\Credentials
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
