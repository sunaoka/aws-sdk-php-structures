<?php

namespace Sunaoka\Aws\Structures\Glue\GetWorkflowRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CRAWLER'|'JOB'|'TRIGGER'|null $Type
 * @property string|null $Name
 * @property string|null $UniqueId
 * @property TriggerNodeDetails|null $TriggerDetails
 * @property JobNodeDetails|null $JobDetails
 * @property CrawlerNodeDetails|null $CrawlerDetails
 */
class Node extends Shape
{
    /**
     * @param array{
     *     Type?: 'CRAWLER'|'JOB'|'TRIGGER'|null,
     *     Name?: string|null,
     *     UniqueId?: string|null,
     *     TriggerDetails?: TriggerNodeDetails|null,
     *     JobDetails?: JobNodeDetails|null,
     *     CrawlerDetails?: CrawlerNodeDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
