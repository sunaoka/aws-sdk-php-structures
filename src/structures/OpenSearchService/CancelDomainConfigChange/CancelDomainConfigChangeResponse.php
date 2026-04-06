<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\CancelDomainConfigChange;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<string>|null $CancelledChangeIds
 * @property list<Shapes\CancelledChangeProperty>|null $CancelledChangeProperties
 * @property bool|null $DryRun
 */
class CancelDomainConfigChangeResponse extends Response
{
}
