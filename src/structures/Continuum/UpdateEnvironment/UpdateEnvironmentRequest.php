<?php

namespace Sunaoka\Aws\Structures\Continuum\UpdateEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 * @property string|null $name
 * @property Shapes\UpdateEnvironmentConfiguration|null $configuration
 */
class UpdateEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     environmentId: string,
     *     name?: string|null,
     *     configuration?: Shapes\UpdateEnvironmentConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
