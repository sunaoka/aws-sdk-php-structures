<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $instanceId
 * @property string|null $ami
 * @property string|null $operatingSystem
 * @property array<string, string>|null $instanceTags
 * @property string|null $accountId
 * @property SeverityCounts|null $severityCounts
 * @property int|null $networkFindings
 */
class Ec2InstanceAggregationResponse extends Shape
{
    /**
     * @param array{
     *     instanceId: string,
     *     ami?: string|null,
     *     operatingSystem?: string|null,
     *     instanceTags?: array<string, string>|null,
     *     accountId?: string|null,
     *     severityCounts?: SeverityCounts|null,
     *     networkFindings?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
