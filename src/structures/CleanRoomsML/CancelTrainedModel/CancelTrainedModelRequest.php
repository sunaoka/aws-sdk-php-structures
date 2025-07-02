<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\CancelTrainedModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipIdentifier
 * @property string $trainedModelArn
 * @property string|null $versionIdentifier
 */
class CancelTrainedModelRequest extends Request
{
    /**
     * @param array{
     *     membershipIdentifier: string,
     *     trainedModelArn: string,
     *     versionIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
