<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\ListApplications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 50> $Limit
 * @property string $NextToken
 */
class ListApplicationsRequest extends Request
{
    /**
     * @param array{
     *     Limit?: int<1, 50>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
