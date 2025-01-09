<?php

namespace Sunaoka\Aws\Structures\ConfigService\DeletePendingAggregationRequest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RequesterAccountId
 * @property string $RequesterAwsRegion
 */
class DeletePendingAggregationRequestRequest extends Request
{
    /**
     * @param array{
     *     RequesterAccountId: string,
     *     RequesterAwsRegion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
