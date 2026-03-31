<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\RegisterCapability;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $capabilityName
 * @property Shapes\CapabilityBaseRequestConfig $capabilityConfig
 */
class RegisterCapabilityRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     capabilityName: string,
     *     capabilityConfig: Shapes\CapabilityBaseRequestConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
