<?php

namespace Sunaoka\Aws\Structures\GroundStation\CreateDataflowEndpointGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<120, 480>|null $contactPostPassDurationSeconds
 * @property int<120, 480>|null $contactPrePassDurationSeconds
 * @property list<Shapes\EndpointDetails> $endpointDetails
 * @property array<string, string>|null $tags
 */
class CreateDataflowEndpointGroupRequest extends Request
{
    /**
     * @param array{
     *     contactPostPassDurationSeconds?: int<120, 480>|null,
     *     contactPrePassDurationSeconds?: int<120, 480>|null,
     *     endpointDetails: list<Shapes\EndpointDetails>,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
