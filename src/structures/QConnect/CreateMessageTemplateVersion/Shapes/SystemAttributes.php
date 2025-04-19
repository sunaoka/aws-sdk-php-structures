<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateMessageTemplateVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property SystemEndpointAttributes|null $customerEndpoint
 * @property SystemEndpointAttributes|null $systemEndpoint
 */
class SystemAttributes extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     customerEndpoint?: SystemEndpointAttributes|null,
     *     systemEndpoint?: SystemEndpointAttributes|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
