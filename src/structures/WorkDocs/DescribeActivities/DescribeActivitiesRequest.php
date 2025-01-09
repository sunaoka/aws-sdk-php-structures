<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DescribeActivities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AuthenticationToken
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property string $OrganizationId
 * @property string $ActivityTypes
 * @property string $ResourceId
 * @property string $UserId
 * @property bool $IncludeIndirectActivities
 * @property int $Limit
 * @property string $Marker
 */
class DescribeActivitiesRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationToken?: string,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     OrganizationId?: string,
     *     ActivityTypes?: string,
     *     ResourceId?: string,
     *     UserId?: string,
     *     IncludeIndirectActivities?: bool,
     *     Limit?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
