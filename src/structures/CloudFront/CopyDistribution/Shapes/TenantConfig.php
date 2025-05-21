<?php

namespace Sunaoka\Aws\Structures\CloudFront\CopyDistribution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ParameterDefinition>|null $ParameterDefinitions
 */
class TenantConfig extends Shape
{
    /**
     * @param array{ParameterDefinitions?: list<ParameterDefinition>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
