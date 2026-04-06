<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetAudienceModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $audienceModelArn
 */
class GetAudienceModelRequest extends Request
{
    /**
     * @param array{audienceModelArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
