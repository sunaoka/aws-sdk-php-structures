<?php

namespace Sunaoka\Aws\Structures\Schemas\UpdateDiscoverer;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Description
 * @property string $DiscovererArn
 * @property string $DiscovererId
 * @property string $SourceArn
 * @property 'STARTED'|'STOPPED' $State
 * @property bool $CrossAccount
 * @property array<string, string> $Tags
 */
class UpdateDiscovererResponse extends Response
{
}
