<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\StopApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property bool|null $forceStop
 */
class StopApplicationRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     forceStop?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
