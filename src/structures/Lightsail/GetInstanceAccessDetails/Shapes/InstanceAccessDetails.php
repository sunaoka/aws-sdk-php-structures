<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetInstanceAccessDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $certKey
 * @property \Aws\Api\DateTimeResult|null $expiresAt
 * @property string|null $ipAddress
 * @property list<string>|null $ipv6Addresses
 * @property string|null $password
 * @property PasswordData|null $passwordData
 * @property string|null $privateKey
 * @property 'ssh'|'rdp'|null $protocol
 * @property string|null $instanceName
 * @property string|null $username
 * @property list<HostKeyAttributes>|null $hostKeys
 */
class InstanceAccessDetails extends Shape
{
    /**
     * @param array{
     *     certKey?: string|null,
     *     expiresAt?: \Aws\Api\DateTimeResult|null,
     *     ipAddress?: string|null,
     *     ipv6Addresses?: list<string>|null,
     *     password?: string|null,
     *     passwordData?: PasswordData|null,
     *     privateKey?: string|null,
     *     protocol?: 'ssh'|'rdp'|null,
     *     instanceName?: string|null,
     *     username?: string|null,
     *     hostKeys?: list<HostKeyAttributes>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
