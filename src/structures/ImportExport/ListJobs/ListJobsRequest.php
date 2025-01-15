<?php

namespace Sunaoka\Aws\Structures\ImportExport\ListJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int|null $MaxJobs
 * @property string|null $Marker
 * @property string|null $APIVersion
 */
class ListJobsRequest extends Request
{
    /**
     * @param array{
     *     MaxJobs?: int|null,
     *     Marker?: string|null,
     *     APIVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
