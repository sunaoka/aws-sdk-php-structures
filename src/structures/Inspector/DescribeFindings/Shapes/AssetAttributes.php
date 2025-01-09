<?php

namespace Sunaoka\Aws\Structures\Inspector\DescribeFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $schemaVersion
 * @property string $agentId
 * @property string $autoScalingGroup
 * @property string $amiId
 * @property string $hostname
 * @property list<string> $ipv4Addresses
 * @property list<Tag> $tags
 * @property list<NetworkInterface> $networkInterfaces
 */
class AssetAttributes extends Shape
{
    /**
     * @param array{
     *     schemaVersion: int<0, max>,
     *     agentId?: string,
     *     autoScalingGroup?: string,
     *     amiId?: string,
     *     hostname?: string,
     *     ipv4Addresses?: list<string>,
     *     tags?: list<Tag>,
     *     networkInterfaces?: list<NetworkInterface>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
