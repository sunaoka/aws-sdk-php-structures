<?php

namespace Sunaoka\Aws\Structures\Iot\CreateTopicRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $token
 * @property string $url
 */
class SalesforceAction extends Shape
{
    /**
     * @param array{
     *     token: string,
     *     url: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
