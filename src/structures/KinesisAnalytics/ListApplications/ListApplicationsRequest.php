<?php

namespace Sunaoka\Aws\Structures\KinesisAnalytics\ListApplications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 50> $Limit
 * @property string $ExclusiveStartApplicationName
 */
class ListApplicationsRequest extends Request
{
    /**
     * @param array{
     *     Limit?: int<1, 50>,
     *     ExclusiveStartApplicationName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
