<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateListener;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property Shapes\RuleAction $defaultAction
 * @property string $name
 * @property int $port
 * @property 'HTTP'|'HTTPS'|'TLS_PASSTHROUGH' $protocol
 * @property string $serviceIdentifier
 * @property array<string, string> $tags
 */
class CreateListenerRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     defaultAction: Shapes\RuleAction,
     *     name: string,
     *     port?: int,
     *     protocol: 'HTTP'|'HTTPS'|'TLS_PASSTHROUGH',
     *     serviceIdentifier: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
