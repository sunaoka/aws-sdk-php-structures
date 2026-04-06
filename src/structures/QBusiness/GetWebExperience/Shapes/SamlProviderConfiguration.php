<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetWebExperience\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $authenticationUrl
 */
class SamlProviderConfiguration extends Shape
{
    /**
     * @param array{authenticationUrl: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
