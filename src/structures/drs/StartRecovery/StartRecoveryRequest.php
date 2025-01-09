<?php

namespace Sunaoka\Aws\Structures\drs\StartRecovery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $isDrill
 * @property list<Shapes\StartRecoveryRequestSourceServer> $sourceServers
 * @property array<string, string> $tags
 */
class StartRecoveryRequest extends Request
{
    /**
     * @param array{
     *     isDrill?: bool,
     *     sourceServers: list<Shapes\StartRecoveryRequestSourceServer>,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
