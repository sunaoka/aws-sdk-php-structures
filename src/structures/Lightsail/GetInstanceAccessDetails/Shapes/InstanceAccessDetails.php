<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetInstanceAccessDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $certKey
 * @property \Aws\Api\DateTimeResult $expiresAt
 * @property string $ipAddress
 * @property list<string> $ipv6Addresses
 * @property string $password
 * @property PasswordData $passwordData
 * @property string $privateKey
 * @property 'ssh'|'rdp' $protocol
 * @property string $instanceName
 * @property string $username
 * @property list<HostKeyAttributes> $hostKeys
 */
class InstanceAccessDetails extends Shape
{
    /**
     * @param array{
     *     certKey?: string,
     *     expiresAt?: \Aws\Api\DateTimeResult,
     *     ipAddress?: string,
     *     ipv6Addresses?: list<string>,
     *     password?: string,
     *     passwordData?: PasswordData,
     *     privateKey?: string,
     *     protocol?: 'ssh'|'rdp',
     *     instanceName?: string,
     *     username?: string,
     *     hostKeys?: list<HostKeyAttributes>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
