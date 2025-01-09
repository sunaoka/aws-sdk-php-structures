<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\PutDialRequestBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $clientToken
 * @property string $id
 * @property 'InvalidInput'|'RequestThrottled'|'UnknownError' $failureCode
 */
class FailedRequest extends Shape
{
    /**
     * @param array{
     *     clientToken?: string,
     *     id?: string,
     *     failureCode?: 'InvalidInput'|'RequestThrottled'|'UnknownError'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
