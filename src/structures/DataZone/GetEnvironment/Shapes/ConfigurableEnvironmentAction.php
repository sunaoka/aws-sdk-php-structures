<?php

namespace Sunaoka\Aws\Structures\DataZone\GetEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $type
 * @property 'IAM'|'HTTPS'|null $auth
 * @property list<ConfigurableActionParameter> $parameters
 */
class ConfigurableEnvironmentAction extends Shape
{
    /**
     * @param array{
     *     type: string,
     *     auth?: 'IAM'|'HTTPS'|null,
     *     parameters: list<ConfigurableActionParameter>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
