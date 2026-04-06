<?php

namespace Sunaoka\Aws\Structures\WorkLink\UpdateFleetMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetArn
 * @property string|null $DisplayName
 * @property bool|null $OptimizeForEndUserLocation
 */
class UpdateFleetMetadataRequest extends Request
{
    /**
     * @param array{
     *     FleetArn: string,
     *     DisplayName?: string|null,
     *     OptimizeForEndUserLocation?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
