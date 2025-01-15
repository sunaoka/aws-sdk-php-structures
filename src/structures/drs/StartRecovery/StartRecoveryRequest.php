<?php

namespace Sunaoka\Aws\Structures\drs\StartRecovery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $isDrill
 * @property list<Shapes\StartRecoveryRequestSourceServer> $sourceServers
 * @property array<string, string>|null $tags
 */
class StartRecoveryRequest extends Request
{
    /**
     * @param array{
     *     isDrill?: bool|null,
     *     sourceServers: list<Shapes\StartRecoveryRequestSourceServer>,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
