<?php

namespace Sunaoka\Aws\Structures\Connect\ListChildHoursOfOperations;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $NextToken
 * @property list<Shapes\HoursOfOperationsIdentifier>|null $ChildHoursOfOperationsSummaryList
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property string|null $LastModifiedRegion
 */
class ListChildHoursOfOperationsResponse extends Response
{
}
