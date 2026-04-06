<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\DeleteTrainedModelOutput;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $trainedModelArn
 * @property string $membershipIdentifier
 */
class DeleteTrainedModelOutputRequest extends Request
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
