<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Format
 * @property string|null $DestinationArn
 */
class AwsApiGatewayAccessLogSettings extends Shape
{
    /**
     * @param array{
     *     Format?: string|null,
     *     DestinationArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
