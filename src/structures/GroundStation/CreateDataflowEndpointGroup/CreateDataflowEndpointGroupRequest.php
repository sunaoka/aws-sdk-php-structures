<?php

namespace Sunaoka\Aws\Structures\GroundStation\CreateDataflowEndpointGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $contactPostPassDurationSeconds
 * @property int $contactPrePassDurationSeconds
 * @property list<Shapes\EndpointDetails> $endpointDetails
 * @property array<string, string> $tags
 */
class CreateDataflowEndpointGroupRequest extends Request
{
    /**
     * @param array{
     *     contactPostPassDurationSeconds?: int,
     *     contactPrePassDurationSeconds?: int,
     *     endpointDetails: list<Shapes\EndpointDetails>,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
