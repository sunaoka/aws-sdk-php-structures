<?php

namespace Sunaoka\Aws\Structures\EMRContainers\DescribeManagedEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string $virtualClusterId
 */
class DescribeManagedEndpointRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     virtualClusterId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
