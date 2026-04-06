<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\CreateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property string|null $wave
 */
class CreateApplicationRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     wave?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
