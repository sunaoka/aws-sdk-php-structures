<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListPartnerApps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Name
 * @property 'lakera-guard'|'comet'|'deepchecks-llm-evaluation'|'fiddler' $Type
 * @property 'Creating'|'Updating'|'Deleting'|'Available'|'Failed'|'UpdateFailed'|'Deleted' $Status
 * @property \Aws\Api\DateTimeResult $CreationTime
 */
class PartnerAppSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     Name?: string,
     *     Type?: 'lakera-guard'|'comet'|'deepchecks-llm-evaluation'|'fiddler',
     *     Status?: 'Creating'|'Updating'|'Deleting'|'Available'|'Failed'|'UpdateFailed'|'Deleted',
     *     CreationTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
