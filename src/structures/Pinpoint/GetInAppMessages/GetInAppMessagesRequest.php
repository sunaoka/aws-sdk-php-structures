<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetInAppMessages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $EndpointId
 */
class GetInAppMessagesRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     EndpointId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
