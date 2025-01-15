<?php

namespace Sunaoka\Aws\Structures\Schemas\CreateDiscoverer;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Description
 * @property string|null $DiscovererArn
 * @property string|null $DiscovererId
 * @property string|null $SourceArn
 * @property 'STARTED'|'STOPPED'|null $State
 * @property bool|null $CrossAccount
 * @property array<string, string>|null $Tags
 */
class CreateDiscovererResponse extends Response
{
}
