<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\UpdateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DIMENSION'|'MEASURE' $Type
 * @property string|null $Name
 * @property 'REQUIRED'|'OPTIONAL'|null $EnforcementInRecord
 */
class PartitionKey extends Shape
{
    /**
     * @param array{
     *     Type: 'DIMENSION'|'MEASURE',
     *     Name?: string|null,
     *     EnforcementInRecord?: 'REQUIRED'|'OPTIONAL'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
