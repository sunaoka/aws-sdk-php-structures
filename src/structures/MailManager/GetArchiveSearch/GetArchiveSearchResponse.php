<?php

namespace Sunaoka\Aws\Structures\MailManager\GetArchiveSearch;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ArchiveId
 * @property Shapes\ArchiveFilters|null $Filters
 * @property \Aws\Api\DateTimeResult|null $FromTimestamp
 * @property \Aws\Api\DateTimeResult|null $ToTimestamp
 * @property int<0, 1000>|null $MaxResults
 * @property Shapes\SearchStatus|null $Status
 */
class GetArchiveSearchResponse extends Response
{
}
