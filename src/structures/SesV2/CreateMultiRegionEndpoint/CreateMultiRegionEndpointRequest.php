<?php

namespace Sunaoka\Aws\Structures\SesV2\CreateMultiRegionEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EndpointName
 * @property Shapes\Details $Details
 * @property list<Shapes\Tag> $Tags
 */
class CreateMultiRegionEndpointRequest extends Request
{
    /**
     * @param array{
     *     EndpointName: string,
     *     Details: Shapes\Details,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
