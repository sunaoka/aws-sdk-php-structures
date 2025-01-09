<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\DeleteConfiguredAudienceModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $configuredAudienceModelArn
 */
class DeleteConfiguredAudienceModelRequest extends Request
{
    /**
     * @param array{configuredAudienceModelArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
