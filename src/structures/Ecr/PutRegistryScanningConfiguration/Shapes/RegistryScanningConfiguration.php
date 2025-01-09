<?php

namespace Sunaoka\Aws\Structures\Ecr\PutRegistryScanningConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BASIC'|'ENHANCED' $scanType
 * @property list<RegistryScanningRule> $rules
 */
class RegistryScanningConfiguration extends Shape
{
    /**
     * @param array{
     *     scanType?: 'BASIC'|'ENHANCED',
     *     rules?: list<RegistryScanningRule>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
