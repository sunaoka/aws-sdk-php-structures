<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetConfiguredAudienceModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $configuredAudienceModelArn
 */
class GetConfiguredAudienceModelRequest extends Request
{
    /**
     * @param array{configuredAudienceModelArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
