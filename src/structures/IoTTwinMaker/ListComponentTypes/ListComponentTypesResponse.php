<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ListComponentTypes;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $workspaceId
 * @property list<Shapes\ComponentTypeSummary> $componentTypeSummaries
 * @property string $nextToken
 * @property int<0, 200> $maxResults
 */
class ListComponentTypesResponse extends Response
{
}
