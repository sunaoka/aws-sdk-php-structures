<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\CreatePublisher;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Identifier $value
 * @property array<string, string>|null $tags
 * @property string|null $clientToken
 */
class CreatePublisherRequest extends Request
{
    /**
     * @param array{
     *     value: Shapes\Identifier,
     *     tags?: array<string, string>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
