<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\UpdateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DIMENSION'|'MEASURE' $Type
 * @property string $Name
 * @property 'REQUIRED'|'OPTIONAL' $EnforcementInRecord
 */
class PartitionKey extends Shape
{
    /**
     * @param array{
     *     Type: 'DIMENSION'|'MEASURE',
     *     Name?: string,
     *     EnforcementInRecord?: 'REQUIRED'|'OPTIONAL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
