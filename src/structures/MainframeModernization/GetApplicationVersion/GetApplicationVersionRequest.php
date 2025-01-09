<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\GetApplicationVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property int<1, max> $applicationVersion
 */
class GetApplicationVersionRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     applicationVersion: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
