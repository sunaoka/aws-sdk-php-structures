<?php

namespace Sunaoka\Aws\Structures\EKS\UpdateClusterConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property Shapes\VpcConfigRequest|null $resourcesVpcConfig
 * @property Shapes\Logging|null $logging
 * @property string|null $clientRequestToken
 */
class UpdateClusterConfigRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     resourcesVpcConfig?: Shapes\VpcConfigRequest|null,
     *     logging?: Shapes\Logging|null,
     *     clientRequestToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
