<?php

namespace Sunaoka\Aws\Structures\MailManager\GetArchiveSearch;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ArchiveId
 * @property Shapes\ArchiveFilters $Filters
 * @property \Aws\Api\DateTimeResult $FromTimestamp
 * @property int $MaxResults
 * @property Shapes\SearchStatus $Status
 * @property \Aws\Api\DateTimeResult $ToTimestamp
 */
class GetArchiveSearchResponse extends Response
{
}
