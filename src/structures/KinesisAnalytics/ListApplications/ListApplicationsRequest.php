<?php

namespace Sunaoka\Aws\Structures\KinesisAnalytics\ListApplications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 50>|null $Limit
 * @property string|null $ExclusiveStartApplicationName
 */
class ListApplicationsRequest extends Request
{
    /**
     * @param array{
     *     Limit?: int<1, 50>|null,
     *     ExclusiveStartApplicationName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
