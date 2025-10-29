<?php

namespace Sunaoka\Aws\Structures\GroundStation\CreateDataflowEndpointGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\EndpointDetails> $endpointDetails
 * @property array<string, string>|null $tags
 * @property int<120, 480>|null $contactPrePassDurationSeconds
 * @property int<120, 480>|null $contactPostPassDurationSeconds
 */
class CreateDataflowEndpointGroupRequest extends Request
{
    /**
     * @param array{
     *     endpointDetails: list<Shapes\EndpointDetails>,
     *     tags?: array<string, string>|null,
     *     contactPrePassDurationSeconds?: int<120, 480>|null,
     *     contactPostPassDurationSeconds?: int<120, 480>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
