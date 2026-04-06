<?php

namespace Sunaoka\Aws\Structures\GroundStation\CreateDataflowEndpointGroupV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\CreateEndpointDetails> $endpoints
 * @property int<30, 480>|null $contactPrePassDurationSeconds
 * @property int<30, 480>|null $contactPostPassDurationSeconds
 * @property array<string, string>|null $tags
 */
class CreateDataflowEndpointGroupV2Request extends Request
{
    /**
     * @param array{
     *     endpoints: list<Shapes\CreateEndpointDetails>,
     *     contactPrePassDurationSeconds?: int<30, 480>|null,
     *     contactPostPassDurationSeconds?: int<30, 480>|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
