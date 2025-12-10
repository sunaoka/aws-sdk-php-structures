<?php

namespace Sunaoka\Aws\Structures\mgn\DescribeVcenterClients\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $vcenterClientID
 * @property string|null $arn
 * @property string|null $hostname
 * @property string|null $vcenterUUID
 * @property string|null $datacenterName
 * @property string|null $lastSeenDatetime
 * @property array<string, string>|null $sourceServerTags
 * @property array<string, string>|null $tags
 */
class VcenterClient extends Shape
{
    /**
     * @param array{
     *     vcenterClientID?: string|null,
     *     arn?: string|null,
     *     hostname?: string|null,
     *     vcenterUUID?: string|null,
     *     datacenterName?: string|null,
     *     lastSeenDatetime?: string|null,
     *     sourceServerTags?: array<string, string>|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
