<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateVpcConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TargetClusterArn
 * @property string $Authentication
 * @property string $VpcId
 * @property list<string> $ClientSubnets
 * @property list<string> $SecurityGroups
 * @property array<string, string>|null $Tags
 */
class CreateVpcConnectionRequest extends Request
{
    /**
     * @param array{
     *     TargetClusterArn: string,
     *     Authentication: string,
     *     VpcId: string,
     *     ClientSubnets: list<string>,
     *     SecurityGroups: list<string>,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
