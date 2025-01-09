<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\CancelTrainedModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipIdentifier
 * @property string $trainedModelArn
 */
class CancelTrainedModelRequest extends Request
{
    /**
     * @param array{
     *     membershipIdentifier: string,
     *     trainedModelArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
