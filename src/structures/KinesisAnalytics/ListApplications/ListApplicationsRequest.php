<?php

namespace Sunaoka\Aws\Structures\KinesisAnalytics\ListApplications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $Limit
 * @property string $ExclusiveStartApplicationName
 */
class ListApplicationsRequest extends Request
{
    /**
     * @param array{
     *     Limit?: int,
     *     ExclusiveStartApplicationName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
