<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\PutDialRequestBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $clientToken
 * @property 'InvalidInput'|'RequestThrottled'|'UnknownError'|null $failureCode
 * @property string|null $id
 */
class FailedRequest extends Shape
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     failureCode?: 'InvalidInput'|'RequestThrottled'|'UnknownError'|null,
     *     id?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
