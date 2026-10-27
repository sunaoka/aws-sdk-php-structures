<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateSourceEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property string|null $Description
 * @property Shapes\SourceEndpointConfiguration|null $Configuration
 */
class UpdateSourceEndpointRequest extends Request
{
    /**
     * @param array{
     *     Arn: string,
     *     Description?: string|null,
     *     Configuration?: Shapes\SourceEndpointConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
