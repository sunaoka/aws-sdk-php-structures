<?php

namespace Sunaoka\Aws\Structures\WAFV2\ListAPIKeys;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $NextMarker
 * @property list<Shapes\APIKeySummary> $APIKeySummaries
 * @property string $ApplicationIntegrationURL
 */
class ListAPIKeysResponse extends Response
{
}
