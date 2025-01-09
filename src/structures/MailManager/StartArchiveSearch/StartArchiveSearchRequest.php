<?php

namespace Sunaoka\Aws\Structures\MailManager\StartArchiveSearch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ArchiveId
 * @property Shapes\ArchiveFilters $Filters
 * @property \Aws\Api\DateTimeResult $FromTimestamp
 * @property int $MaxResults
 * @property \Aws\Api\DateTimeResult $ToTimestamp
 */
class StartArchiveSearchRequest extends Request
{
    /**
     * @param array{
     *     ArchiveId: string,
     *     Filters?: Shapes\ArchiveFilters,
     *     FromTimestamp: \Aws\Api\DateTimeResult,
     *     MaxResults: int,
     *     ToTimestamp: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
