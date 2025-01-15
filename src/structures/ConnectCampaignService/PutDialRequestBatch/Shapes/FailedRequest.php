<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\PutDialRequestBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $clientToken
 * @property string|null $id
 * @property 'InvalidInput'|'RequestThrottled'|'UnknownError'|null $failureCode
 */
class FailedRequest extends Shape
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     id?: string|null,
     *     failureCode?: 'InvalidInput'|'RequestThrottled'|'UnknownError'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
