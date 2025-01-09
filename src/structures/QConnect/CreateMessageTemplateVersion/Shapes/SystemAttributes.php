<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateMessageTemplateVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SystemEndpointAttributes $customerEndpoint
 * @property string $name
 * @property SystemEndpointAttributes $systemEndpoint
 */
class SystemAttributes extends Shape
{
    /**
     * @param array{
     *     customerEndpoint?: SystemEndpointAttributes,
     *     name?: string,
     *     systemEndpoint?: SystemEndpointAttributes
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
