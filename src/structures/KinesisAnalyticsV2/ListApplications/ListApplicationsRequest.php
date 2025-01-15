<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\ListApplications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 50>|null $Limit
 * @property string|null $NextToken
 */
class ListApplicationsRequest extends Request
{
    /**
     * @param array{
     *     Limit?: int<1, 50>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
