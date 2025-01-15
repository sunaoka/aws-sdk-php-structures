<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\ListVectorEnrichmentJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property int $DurationInSeconds
 * @property string $Name
 * @property 'INITIALIZING'|'IN_PROGRESS'|'STOPPING'|'STOPPED'|'COMPLETED'|'FAILED'|'DELETING'|'DELETED' $Status
 * @property array<string, string>|null $Tags
 * @property 'REVERSE_GEOCODING'|'MAP_MATCHING' $Type
 */
class ListVectorEnrichmentJobOutputConfig extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     DurationInSeconds: int,
     *     Name: string,
     *     Status: 'INITIALIZING'|'IN_PROGRESS'|'STOPPING'|'STOPPED'|'COMPLETED'|'FAILED'|'DELETING'|'DELETED',
     *     Tags?: array<string, string>|null,
     *     Type: 'REVERSE_GEOCODING'|'MAP_MATCHING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
