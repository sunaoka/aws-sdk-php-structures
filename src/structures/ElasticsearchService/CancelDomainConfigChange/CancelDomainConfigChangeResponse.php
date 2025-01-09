<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\CancelDomainConfigChange;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool $DryRun
 * @property list<string> $CancelledChangeIds
 * @property list<Shapes\CancelledChangeProperty> $CancelledChangeProperties
 */
class CancelDomainConfigChangeResponse extends Response
{
}
