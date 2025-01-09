<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateAccessLogSubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $destinationArn
 * @property string $resourceIdentifier
 * @property 'SERVICE'|'RESOURCE' $serviceNetworkLogType
 * @property array<string, string> $tags
 */
class CreateAccessLogSubscriptionRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     destinationArn: string,
     *     resourceIdentifier: string,
     *     serviceNetworkLogType?: 'SERVICE'|'RESOURCE',
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
