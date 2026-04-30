<?php

namespace Sunaoka\Aws\Structures\DataZone\GetNotebookRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PUBLIC_INTERNET_ONLY'|'VPC_ONLY' $networkAccessType
 * @property string|null $vpcId
 * @property list<string>|null $subnetIds
 * @property list<string>|null $securityGroupIds
 */
class NetworkConfig extends Shape
{
    /**
     * @param array{
     *     networkAccessType: 'PUBLIC_INTERNET_ONLY'|'VPC_ONLY',
     *     vpcId?: string|null,
     *     subnetIds?: list<string>|null,
     *     securityGroupIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
