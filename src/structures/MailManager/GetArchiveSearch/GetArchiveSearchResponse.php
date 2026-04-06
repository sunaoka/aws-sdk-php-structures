<?php

namespace Sunaoka\Aws\Structures\MailManager\GetArchiveSearch;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ArchiveId
 * @property Shapes\ArchiveFilters|null $Filters
 * @property \Aws\Api\DateTimeResult|null $FromTimestamp
 * @property int<0, 1000>|null $MaxResults
 * @property Shapes\SearchStatus|null $Status
 * @property \Aws\Api\DateTimeResult|null $ToTimestamp
 */
class GetArchiveSearchResponse extends Response
{
}
