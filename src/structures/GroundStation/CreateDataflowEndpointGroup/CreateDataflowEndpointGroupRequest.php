<?php

namespace Sunaoka\Aws\Structures\GroundStation\CreateDataflowEndpointGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<120, 480> $contactPostPassDurationSeconds
 * @property int<120, 480> $contactPrePassDurationSeconds
 * @property list<Shapes\EndpointDetails> $endpointDetails
 * @property array<string, string> $tags
 */
class CreateDataflowEndpointGroupRequest extends Request
{
    /**
     * @param array{
     *     contactPostPassDurationSeconds?: int<120, 480>,
     *     contactPrePassDurationSeconds?: int<120, 480>,
     *     endpointDetails: list<Shapes\EndpointDetails>,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
