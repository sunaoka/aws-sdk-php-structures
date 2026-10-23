<?php

namespace Sunaoka\Aws\Structures\Continuum\CreateEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property Shapes\CreateEnvironmentConfiguration|null $configuration
 */
class CreateEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     configuration?: Shapes\CreateEnvironmentConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
