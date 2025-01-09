<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\CreateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $description
 * @property string $wave
 */
class CreateApplicationRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string,
     *     wave?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
