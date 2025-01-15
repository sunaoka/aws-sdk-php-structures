<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\UpdateApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $configurationId
 * @property string|null $name
 * @property string|null $description
 * @property string|null $wave
 */
class UpdateApplicationRequest extends Request
{
    /**
     * @param array{
     *     configurationId: string,
     *     name?: string|null,
     *     description?: string|null,
     *     wave?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
