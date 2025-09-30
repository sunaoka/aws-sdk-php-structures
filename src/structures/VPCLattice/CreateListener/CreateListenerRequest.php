<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateListener;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceIdentifier
 * @property string $name
 * @property 'HTTP'|'HTTPS'|'TLS_PASSTHROUGH' $protocol
 * @property int<1, 65535>|null $port
 * @property Shapes\RuleAction $defaultAction
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 */
class CreateListenerRequest extends Request
{
    /**
     * @param array{
     *     serviceIdentifier: string,
     *     name: string,
     *     protocol: 'HTTP'|'HTTPS'|'TLS_PASSTHROUGH',
     *     port?: int<1, 65535>|null,
     *     defaultAction: Shapes\RuleAction,
     *     clientToken?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
