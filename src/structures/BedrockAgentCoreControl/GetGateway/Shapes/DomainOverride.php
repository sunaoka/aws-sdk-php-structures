<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $defaultDomain
 * @property list<string>|null $alternateDomains
 */
class DomainOverride extends Shape
{
    /**
     * @param array{
     *     defaultDomain: string,
     *     alternateDomains?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
