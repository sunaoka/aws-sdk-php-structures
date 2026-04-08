<?php

namespace Sunaoka\Aws\Structures\drs\StartRecovery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\StartRecoveryRequestSourceServer> $sourceServers
 * @property bool|null $isDrill
 * @property array<string, string>|null $tags
 */
class StartRecoveryRequest extends Request
{
    /**
     * @param array{
     *     sourceServers: list<Shapes\StartRecoveryRequestSourceServer>,
     *     isDrill?: bool|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
