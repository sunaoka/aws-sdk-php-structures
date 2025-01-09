<?php

namespace Sunaoka\Aws\Structures\MQ\DescribeBrokerEngineTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ACTIVEMQ'|'RABBITMQ' $EngineType
 * @property list<EngineVersion> $EngineVersions
 */
class BrokerEngineType extends Shape
{
    /**
     * @param array{
     *     EngineType?: 'ACTIVEMQ'|'RABBITMQ',
     *     EngineVersions?: list<EngineVersion>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
