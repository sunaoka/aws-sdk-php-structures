<?php

namespace Sunaoka\Aws\Structures\MQ\DescribeBrokerEngineTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ACTIVEMQ'|'RABBITMQ'|null $EngineType
 * @property list<EngineVersion>|null $EngineVersions
 */
class BrokerEngineType extends Shape
{
    /**
     * @param array{
     *     EngineType?: 'ACTIVEMQ'|'RABBITMQ'|null,
     *     EngineVersions?: list<EngineVersion>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
