<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListDependencies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $dependencyId
 * @property string $serviceArn
 * @property string $dependencyName
 * @property string $dnsName
 * @property string $location
 * @property \Aws\Api\DateTimeResult $lastDetectedTime
 * @property list<string> $sourceRegions
 * @property string|null $provider
 * @property QueryRange $queryRange
 * @property 'HARD'|'SOFT'|'UNKNOWN' $criticality
 * @property string|null $comment
 */
class DependencySummary extends Shape
{
    /**
     * @param array{
     *     dependencyId: string,
     *     serviceArn: string,
     *     dependencyName: string,
     *     dnsName: string,
     *     location: string,
     *     lastDetectedTime: \Aws\Api\DateTimeResult,
     *     sourceRegions: list<string>,
     *     provider?: string|null,
     *     queryRange: QueryRange,
     *     criticality: 'HARD'|'SOFT'|'UNKNOWN',
     *     comment?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
