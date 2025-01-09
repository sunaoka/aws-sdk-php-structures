<?php

namespace Sunaoka\Aws\Structures\Glue\GetWorkflowRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CRAWLER'|'JOB'|'TRIGGER' $Type
 * @property string $Name
 * @property string $UniqueId
 * @property TriggerNodeDetails $TriggerDetails
 * @property JobNodeDetails $JobDetails
 * @property CrawlerNodeDetails $CrawlerDetails
 */
class Node extends Shape
{
    /**
     * @param array{
     *     Type?: 'CRAWLER'|'JOB'|'TRIGGER',
     *     Name?: string,
     *     UniqueId?: string,
     *     TriggerDetails?: TriggerNodeDetails,
     *     JobDetails?: JobNodeDetails,
     *     CrawlerDetails?: CrawlerNodeDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
