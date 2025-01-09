<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property string $ami
 * @property string $instanceId
 * @property array<string, string> $instanceTags
 * @property int $networkFindings
 * @property string $operatingSystem
 * @property SeverityCounts $severityCounts
 */
class Ec2InstanceAggregationResponse extends Shape
{
    /**
     * @param array{
     *     accountId?: string,
     *     ami?: string,
     *     instanceId: string,
     *     instanceTags?: array<string, string>,
     *     networkFindings?: int,
     *     operatingSystem?: string,
     *     severityCounts?: SeverityCounts
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
