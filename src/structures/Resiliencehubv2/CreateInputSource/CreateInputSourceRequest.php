<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\CreateInputSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceArn
 * @property Shapes\ResourceConfiguration $resourceConfiguration
 * @property string|null $clientToken
 */
class CreateInputSourceRequest extends Request
{
    /**
     * @param array{
     *     serviceArn: string,
     *     resourceConfiguration: Shapes\ResourceConfiguration,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
