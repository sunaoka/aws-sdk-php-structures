<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetTrainedModelInferenceJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipIdentifier
 * @property string $trainedModelInferenceJobArn
 */
class GetTrainedModelInferenceJobRequest extends Request
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
