<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\CancelDomainConfigChange;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool|null $DryRun
 * @property list<string>|null $CancelledChangeIds
 * @property list<Shapes\CancelledChangeProperty>|null $CancelledChangeProperties
 */
class CancelDomainConfigChangeResponse extends Response
{
}
