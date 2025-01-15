<?php

namespace Sunaoka\Aws\Structures\Ecr\GetRegistryScanningConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BASIC'|'ENHANCED'|null $scanType
 * @property list<RegistryScanningRule>|null $rules
 */
class RegistryScanningConfiguration extends Shape
{
    /**
     * @param array{
     *     scanType?: 'BASIC'|'ENHANCED'|null,
     *     rules?: list<RegistryScanningRule>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
