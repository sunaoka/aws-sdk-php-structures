<?php

namespace Sunaoka\Aws\Structures\Iot\CreateTopicRuleDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HttpUrlDestinationConfiguration|null $httpUrlConfiguration
 * @property VpcDestinationConfiguration|null $vpcConfiguration
 */
class TopicRuleDestinationConfiguration extends Shape
{
    /**
     * @param array{
     *     httpUrlConfiguration?: HttpUrlDestinationConfiguration|null,
     *     vpcConfiguration?: VpcDestinationConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
