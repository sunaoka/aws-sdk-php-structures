<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DeregisterCapability;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $capabilityName
 */
class DeregisterCapabilityRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     capabilityName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
