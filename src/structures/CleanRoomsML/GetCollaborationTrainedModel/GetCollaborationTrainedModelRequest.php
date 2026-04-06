<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetCollaborationTrainedModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $trainedModelArn
 * @property string $collaborationIdentifier
 */
class GetCollaborationTrainedModelRequest extends Request
{
    /**
     * @param array{
     *     trainedModelArn: string,
     *     collaborationIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
