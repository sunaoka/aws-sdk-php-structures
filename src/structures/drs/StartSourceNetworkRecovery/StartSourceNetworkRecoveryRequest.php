<?php

namespace Sunaoka\Aws\Structures\drs\StartSourceNetworkRecovery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $deployAsNew
 * @property list<Shapes\StartSourceNetworkRecoveryRequestNetworkEntry> $sourceNetworks
 * @property array<string, string> $tags
 */
class StartSourceNetworkRecoveryRequest extends Request
{
    /**
     * @param array{
     *     deployAsNew?: bool,
     *     sourceNetworks: list<Shapes\StartSourceNetworkRecoveryRequestNetworkEntry>,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
