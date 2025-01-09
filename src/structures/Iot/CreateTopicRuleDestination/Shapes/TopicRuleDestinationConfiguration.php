<?php

namespace Sunaoka\Aws\Structures\Iot\CreateTopicRuleDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HttpUrlDestinationConfiguration $httpUrlConfiguration
 * @property VpcDestinationConfiguration $vpcConfiguration
 */
class TopicRuleDestinationConfiguration extends Shape
{
    /**
     * @param array{
     *     httpUrlConfiguration?: HttpUrlDestinationConfiguration,
     *     vpcConfiguration?: VpcDestinationConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
