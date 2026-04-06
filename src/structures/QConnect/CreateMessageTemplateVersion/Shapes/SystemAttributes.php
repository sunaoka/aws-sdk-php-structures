<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateMessageTemplateVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SystemEndpointAttributes|null $customerEndpoint
 * @property string|null $name
 * @property SystemEndpointAttributes|null $systemEndpoint
 */
class SystemAttributes extends Shape
{
    /**
     * @param array{
     *     customerEndpoint?: SystemEndpointAttributes|null,
     *     name?: string|null,
     *     systemEndpoint?: SystemEndpointAttributes|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
