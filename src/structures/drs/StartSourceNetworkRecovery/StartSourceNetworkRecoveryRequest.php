<?php

namespace Sunaoka\Aws\Structures\drs\StartSourceNetworkRecovery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\StartSourceNetworkRecoveryRequestNetworkEntry> $sourceNetworks
 * @property bool|null $deployAsNew
 * @property array<string, string>|null $tags
 */
class StartSourceNetworkRecoveryRequest extends Request
{
    /**
     * @param array{
     *     sourceNetworks: list<Shapes\StartSourceNetworkRecoveryRequestNetworkEntry>,
     *     deployAsNew?: bool|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
