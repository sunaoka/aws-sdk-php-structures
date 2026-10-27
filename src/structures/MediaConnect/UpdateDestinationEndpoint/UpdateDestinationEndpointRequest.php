<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateDestinationEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property string|null $Description
 * @property Shapes\DestinationEndpointConfiguration|null $Configuration
 */
class UpdateDestinationEndpointRequest extends Request
{
    /**
     * @param array{
     *     Arn: string,
     *     Description?: string|null,
     *     Configuration?: Shapes\DestinationEndpointConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
