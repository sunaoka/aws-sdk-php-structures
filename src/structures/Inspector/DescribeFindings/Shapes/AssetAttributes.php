<?php

namespace Sunaoka\Aws\Structures\Inspector\DescribeFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $schemaVersion
 * @property string|null $agentId
 * @property string|null $autoScalingGroup
 * @property string|null $amiId
 * @property string|null $hostname
 * @property list<string>|null $ipv4Addresses
 * @property list<Tag>|null $tags
 * @property list<NetworkInterface>|null $networkInterfaces
 */
class AssetAttributes extends Shape
{
    /**
     * @param array{
     *     schemaVersion: int<0, max>,
     *     agentId?: string|null,
     *     autoScalingGroup?: string|null,
     *     amiId?: string|null,
     *     hostname?: string|null,
     *     ipv4Addresses?: list<string>|null,
     *     tags?: list<Tag>|null,
     *     networkInterfaces?: list<NetworkInterface>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
