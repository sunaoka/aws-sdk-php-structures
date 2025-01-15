<?php

namespace Sunaoka\Aws\Structures\drs\StartSourceNetworkRecovery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $deployAsNew
 * @property list<Shapes\StartSourceNetworkRecoveryRequestNetworkEntry> $sourceNetworks
 * @property array<string, string>|null $tags
 */
class StartSourceNetworkRecoveryRequest extends Request
{
    /**
     * @param array{
     *     deployAsNew?: bool|null,
     *     sourceNetworks: list<Shapes\StartSourceNetworkRecoveryRequestNetworkEntry>,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
