<?php

namespace Sunaoka\Aws\Structures\RTBFabric\CreateOutboundExternalLink\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ResponderErrorMaskingForHttpCode>|null $responderErrorMasking
 * @property string|null $customerProvidedId
 */
class LinkAttributes extends Shape
{
    /**
     * @param array{
     *     responderErrorMasking?: list<ResponderErrorMaskingForHttpCode>|null,
     *     customerProvidedId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
