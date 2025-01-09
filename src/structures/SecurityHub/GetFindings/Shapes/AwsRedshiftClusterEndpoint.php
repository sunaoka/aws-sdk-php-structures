<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Address
 * @property int $Port
 */
class AwsRedshiftClusterEndpoint extends Shape
{
    /**
     * @param array{
     *     Address?: string,
     *     Port?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
