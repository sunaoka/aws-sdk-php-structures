<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ListComponentTypes;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $workspaceId
 * @property list<Shapes\ComponentTypeSummary> $componentTypeSummaries
 * @property string|null $nextToken
 * @property int<0, 200>|null $maxResults
 */
class ListComponentTypesResponse extends Response
{
}
