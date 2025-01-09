<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\DeleteAudienceModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $audienceModelArn
 */
class DeleteAudienceModelRequest extends Request
{
    /**
     * @param array{audienceModelArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
