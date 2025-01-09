<?php

namespace Sunaoka\Aws\Structures\mgn\DescribeVcenterClients\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $datacenterName
 * @property string $hostname
 * @property string $lastSeenDatetime
 * @property array<string, string> $sourceServerTags
 * @property array<string, string> $tags
 * @property string $vcenterClientID
 * @property string $vcenterUUID
 */
class VcenterClient extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     datacenterName?: string,
     *     hostname?: string,
     *     lastSeenDatetime?: string,
     *     sourceServerTags?: array<string, string>,
     *     tags?: array<string, string>,
     *     vcenterClientID?: string,
     *     vcenterUUID?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
