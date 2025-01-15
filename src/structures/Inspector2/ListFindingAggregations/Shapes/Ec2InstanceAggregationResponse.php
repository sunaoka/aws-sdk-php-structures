<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFindingAggregations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountId
 * @property string|null $ami
 * @property string $instanceId
 * @property array<string, string>|null $instanceTags
 * @property int|null $networkFindings
 * @property string|null $operatingSystem
 * @property SeverityCounts|null $severityCounts
 */
class Ec2InstanceAggregationResponse extends Shape
{
    /**
     * @param array{
     *     accountId?: string|null,
     *     ami?: string|null,
     *     instanceId: string,
     *     instanceTags?: array<string, string>|null,
     *     networkFindings?: int|null,
     *     operatingSystem?: string|null,
     *     severityCounts?: SeverityCounts|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
