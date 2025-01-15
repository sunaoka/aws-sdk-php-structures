<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DescribeActivities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AuthenticationToken
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property string|null $OrganizationId
 * @property string|null $ActivityTypes
 * @property string|null $ResourceId
 * @property string|null $UserId
 * @property bool|null $IncludeIndirectActivities
 * @property int<1, 999>|null $Limit
 * @property string|null $Marker
 */
class DescribeActivitiesRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationToken?: string|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     OrganizationId?: string|null,
     *     ActivityTypes?: string|null,
     *     ResourceId?: string|null,
     *     UserId?: string|null,
     *     IncludeIndirectActivities?: bool|null,
     *     Limit?: int<1, 999>|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
