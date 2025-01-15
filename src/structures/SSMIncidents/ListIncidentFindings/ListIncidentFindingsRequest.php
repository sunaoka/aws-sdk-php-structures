<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\ListIncidentFindings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $incidentRecordArn
 * @property int<1, 20>|null $maxResults
 * @property string|null $nextToken
 */
class ListIncidentFindingsRequest extends Request
{
    /**
     * @param array{
     *     incidentRecordArn: string,
     *     maxResults?: int<1, 20>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
