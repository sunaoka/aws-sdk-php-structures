<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateDistributionTenant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 */
class Certificate extends Shape
{
    /**
     * @param array{Arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
