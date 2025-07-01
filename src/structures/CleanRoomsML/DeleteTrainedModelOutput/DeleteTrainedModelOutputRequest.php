<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\DeleteTrainedModelOutput;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $trainedModelArn
 * @property string $membershipIdentifier
 * @property string|null $versionIdentifier
 */
class DeleteTrainedModelOutputRequest extends Request
{
    /**
     * @param array{
     *     trainedModelArn: string,
     *     membershipIdentifier: string,
     *     versionIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
