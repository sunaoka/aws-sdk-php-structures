<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateListener;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property Shapes\RuleAction $defaultAction
 * @property string $name
 * @property int<1, 65535>|null $port
 * @property 'HTTP'|'HTTPS'|'TLS_PASSTHROUGH' $protocol
 * @property string $serviceIdentifier
 * @property array<string, string>|null $tags
 */
class CreateListenerRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     defaultAction: Shapes\RuleAction,
     *     name: string,
     *     port?: int<1, 65535>|null,
     *     protocol: 'HTTP'|'HTTPS'|'TLS_PASSTHROUGH',
     *     serviceIdentifier: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
