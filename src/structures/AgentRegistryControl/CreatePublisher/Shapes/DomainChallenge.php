<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\CreatePublisher\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $recordName
 * @property string $recordValue
 */
class DomainChallenge extends Shape
{
    /**
     * @param array{
     *     recordName: string,
     *     recordValue: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
