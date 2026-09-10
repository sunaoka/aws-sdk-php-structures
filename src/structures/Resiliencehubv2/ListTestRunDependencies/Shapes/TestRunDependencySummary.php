<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListTestRunDependencies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $dependencyId
 * @property string $dependencyName
 * @property string $dnsName
 * @property 'HARD'|'SOFT'|'UNKNOWN' $criticality
 * @property 'DISCOVERED'|'MANUAL' $source
 * @property string|null $location
 * @property list<string>|null $sourceRegions
 * @property string|null $provider
 */
class TestRunDependencySummary extends Shape
{
    /**
     * @param array{
     *     dependencyId?: string|null,
     *     dependencyName: string,
     *     dnsName: string,
     *     criticality: 'HARD'|'SOFT'|'UNKNOWN',
     *     source: 'DISCOVERED'|'MANUAL',
     *     location?: string|null,
     *     sourceRegions?: list<string>|null,
     *     provider?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
