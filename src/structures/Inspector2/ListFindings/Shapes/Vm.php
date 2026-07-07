<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $type
 * @property string|null $vmName
 * @property string|null $vmImageReference
 * @property list<string>|null $ipV4Addresses
 * @property list<string>|null $ipV6Addresses
 * @property string|null $networkId
 * @property list<string>|null $subnetIds
 * @property list<string>|null $securityGroupIds
 * @property \Aws\Api\DateTimeResult|null $launchedAt
 * @property string|null $platform
 * @property string|null $executionRole
 * @property string|null $keyName
 */
class Vm extends Shape
{
    /**
     * @param array{
     *     type?: string|null,
     *     vmName?: string|null,
     *     vmImageReference?: string|null,
     *     ipV4Addresses?: list<string>|null,
     *     ipV6Addresses?: list<string>|null,
     *     networkId?: string|null,
     *     subnetIds?: list<string>|null,
     *     securityGroupIds?: list<string>|null,
     *     launchedAt?: \Aws\Api\DateTimeResult|null,
     *     platform?: string|null,
     *     executionRole?: string|null,
     *     keyName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
