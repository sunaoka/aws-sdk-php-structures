<?php

namespace Sunaoka\Aws\Structures\QuickSight\SearchSpaces;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $spaceId
 * @property string|null $spaceArn
 * @property list<Shapes\SpaceSummary> $SpaceSummaries
 * @property string|null $NextToken
 * @property string|null $RequestId
 */
class SearchSpacesResponse extends Response
{
}
