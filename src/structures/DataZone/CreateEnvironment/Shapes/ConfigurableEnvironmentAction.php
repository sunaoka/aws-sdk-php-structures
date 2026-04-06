<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IAM'|'HTTPS'|null $auth
 * @property list<ConfigurableActionParameter> $parameters
 * @property string $type
 */
class ConfigurableEnvironmentAction extends Shape
{
    /**
     * @param array{
     *     auth?: 'IAM'|'HTTPS'|null,
     *     parameters: list<ConfigurableActionParameter>,
     *     type: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
