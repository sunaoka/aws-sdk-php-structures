<?php

namespace Sunaoka\Aws\Structures\Iot\SearchIndex;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $nextToken
 * @property list<Shapes\ThingDocument>|null $things
 * @property list<Shapes\ThingGroupDocument>|null $thingGroups
 */
class SearchIndexResponse extends Response
{
}
