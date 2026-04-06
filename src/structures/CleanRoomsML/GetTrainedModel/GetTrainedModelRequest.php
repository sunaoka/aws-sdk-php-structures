<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetTrainedModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $trainedModelArn
 * @property string $membershipIdentifier
 */
class GetTrainedModelRequest extends Request
{
    /**
     * @param array{
     *     trainedModelArn: string,
     *     membershipIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
