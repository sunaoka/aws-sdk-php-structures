<?php

namespace Sunaoka\Aws\Structures\QBusiness\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $personalizationControlMode
 */
class PersonalizationConfiguration extends Shape
{
    /**
     * @param array{personalizationControlMode: 'ENABLED'|'DISABLED'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
