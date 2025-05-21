<?php

namespace Sunaoka\Aws\Structures\QBusiness\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $audioExtractionStatus
 */
class AudioExtractionConfiguration extends Shape
{
    /**
     * @param array{audioExtractionStatus: 'ENABLED'|'DISABLED'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
