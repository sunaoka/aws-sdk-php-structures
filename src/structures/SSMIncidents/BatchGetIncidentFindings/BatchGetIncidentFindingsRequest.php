<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\BatchGetIncidentFindings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $findingIds
 * @property string $incidentRecordArn
 */
class BatchGetIncidentFindingsRequest extends Request
{
    /**
     * @param array{
     *     findingIds: list<string>,
     *     incidentRecordArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
