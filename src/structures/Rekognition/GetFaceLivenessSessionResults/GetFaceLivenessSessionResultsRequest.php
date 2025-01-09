<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetFaceLivenessSessionResults;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SessionId
 */
class GetFaceLivenessSessionResultsRequest extends Request
{
    /**
     * @param array{SessionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
