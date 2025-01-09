<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\CancelTrainedModelInferenceJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipIdentifier
 * @property string $trainedModelInferenceJobArn
 */
class CancelTrainedModelInferenceJobRequest extends Request
{
    /**
     * @param array{
     *     membershipIdentifier: string,
     *     trainedModelInferenceJobArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
