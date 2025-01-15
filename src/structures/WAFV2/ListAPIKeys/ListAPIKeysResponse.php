<?php

namespace Sunaoka\Aws\Structures\WAFV2\ListAPIKeys;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $NextMarker
 * @property list<Shapes\APIKeySummary>|null $APIKeySummaries
 * @property string|null $ApplicationIntegrationURL
 */
class ListAPIKeysResponse extends Response
{
}
