<?php

namespace Sunaoka\Aws\Structures\RTBFabric\ListAvailableModuleVersions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $moduleId
 * @property list<Shapes\AvailableModuleVersionSummary> $versions
 * @property string|null $nextToken
 */
class ListAvailableModuleVersionsResponse extends Response
{
}
