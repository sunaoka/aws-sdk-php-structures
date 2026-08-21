<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateGatewayTarget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $identifier
 * @property int<1, 86400>|null $timeout
 * @property list<string>|null $compositeIdentifier
 */
class StickinessConfiguration extends Shape
{
    /**
     * @param array{
     *     identifier: string,
     *     timeout?: int<1, 86400>|null,
     *     compositeIdentifier?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
