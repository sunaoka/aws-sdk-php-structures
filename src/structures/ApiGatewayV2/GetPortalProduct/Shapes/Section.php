<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetPortalProduct\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $ProductRestEndpointPageArns
 * @property string $SectionName
 */
class Section extends Shape
{
    /**
     * @param array{
     *     ProductRestEndpointPageArns: list<string>,
     *     SectionName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
