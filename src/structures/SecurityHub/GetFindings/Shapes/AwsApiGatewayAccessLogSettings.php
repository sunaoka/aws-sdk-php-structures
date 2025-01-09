<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Format
 * @property string $DestinationArn
 */
class AwsApiGatewayAccessLogSettings extends Shape
{
    /**
     * @param array{
     *     Format?: string,
     *     DestinationArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
