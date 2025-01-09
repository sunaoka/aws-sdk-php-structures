<?php

namespace Sunaoka\Aws\Structures\ImportExport\ListJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $MaxJobs
 * @property string $Marker
 * @property string $APIVersion
 */
class ListJobsRequest extends Request
{
    /**
     * @param array{
     *     MaxJobs?: int,
     *     Marker?: string,
     *     APIVersion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
