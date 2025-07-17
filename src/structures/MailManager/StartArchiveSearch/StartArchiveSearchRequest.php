<?php

namespace Sunaoka\Aws\Structures\MailManager\StartArchiveSearch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ArchiveId
 * @property Shapes\ArchiveFilters|null $Filters
 * @property \Aws\Api\DateTimeResult $FromTimestamp
 * @property \Aws\Api\DateTimeResult $ToTimestamp
 * @property int<0, 1000> $MaxResults
 */
class StartArchiveSearchRequest extends Request
{
    /**
     * @param array{
     *     ArchiveId: string,
     *     Filters?: Shapes\ArchiveFilters|null,
     *     FromTimestamp: \Aws\Api\DateTimeResult,
     *     ToTimestamp: \Aws\Api\DateTimeResult,
     *     MaxResults: int<0, 1000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
