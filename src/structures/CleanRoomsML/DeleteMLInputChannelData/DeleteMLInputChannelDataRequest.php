<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\DeleteMLInputChannelData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $mlInputChannelArn
 * @property string $membershipIdentifier
 */
class DeleteMLInputChannelDataRequest extends Request
{
    /**
     * @param array{
     *     mlInputChannelArn: string,
     *     membershipIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
