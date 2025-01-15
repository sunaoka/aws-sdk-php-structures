<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListPartnerApps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $Name
 * @property 'lakera-guard'|'comet'|'deepchecks-llm-evaluation'|'fiddler'|null $Type
 * @property 'Creating'|'Updating'|'Deleting'|'Available'|'Failed'|'UpdateFailed'|'Deleted'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 */
class PartnerAppSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Name?: string|null,
     *     Type?: 'lakera-guard'|'comet'|'deepchecks-llm-evaluation'|'fiddler'|null,
     *     Status?: 'Creating'|'Updating'|'Deleting'|'Available'|'Failed'|'UpdateFailed'|'Deleted'|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
