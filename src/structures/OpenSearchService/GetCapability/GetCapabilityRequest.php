<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\GetCapability;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $capabilityName
 */
class GetCapabilityRequest extends Request
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
