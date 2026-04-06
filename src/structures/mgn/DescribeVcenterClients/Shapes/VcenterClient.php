<?php

namespace Sunaoka\Aws\Structures\mgn\DescribeVcenterClients\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $datacenterName
 * @property string|null $hostname
 * @property string|null $lastSeenDatetime
 * @property array<string, string>|null $sourceServerTags
 * @property array<string, string>|null $tags
 * @property string|null $vcenterClientID
 * @property string|null $vcenterUUID
 */
class VcenterClient extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     datacenterName?: string|null,
     *     hostname?: string|null,
     *     lastSeenDatetime?: string|null,
     *     sourceServerTags?: array<string, string>|null,
     *     tags?: array<string, string>|null,
     *     vcenterClientID?: string|null,
     *     vcenterUUID?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
