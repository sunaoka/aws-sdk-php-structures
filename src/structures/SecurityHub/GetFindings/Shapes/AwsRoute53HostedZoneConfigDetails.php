<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Comment
 */
class AwsRoute53HostedZoneConfigDetails extends Shape
{
    /**
     * @param array{Comment?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
