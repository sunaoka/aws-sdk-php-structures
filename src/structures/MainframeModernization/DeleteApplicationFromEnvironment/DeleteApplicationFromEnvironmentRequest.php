<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\DeleteApplicationFromEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $environmentId
 */
class DeleteApplicationFromEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     environmentId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
