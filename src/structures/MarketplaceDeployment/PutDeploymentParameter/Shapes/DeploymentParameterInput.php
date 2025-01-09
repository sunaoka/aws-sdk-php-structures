<?php

namespace Sunaoka\Aws\Structures\MarketplaceDeployment\PutDeploymentParameter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $secretString
 */
class DeploymentParameterInput extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     secretString: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
