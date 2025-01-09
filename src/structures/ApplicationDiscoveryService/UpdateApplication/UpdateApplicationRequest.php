<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\UpdateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $configurationId
 * @property string $name
 * @property string $description
 * @property string $wave
 */
class UpdateApplicationRequest extends Request
{
    /**
     * @param array{
     *     configurationId: string,
     *     name?: string,
     *     description?: string,
     *     wave?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
