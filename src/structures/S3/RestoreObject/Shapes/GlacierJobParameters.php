<?php

namespace Sunaoka\Aws\Structures\S3\RestoreObject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Standard'|'Bulk'|'Expedited' $Tier
 */
class GlacierJobParameters extends Shape
{
    /**
     * @param array{Tier: 'Standard'|'Bulk'|'Expedited'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
