<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\PutDialRequestBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $clientToken
 * @property string $id
 */
class SuccessfulRequest extends Shape
{
    /**
     * @param array{
     *     clientToken?: string,
     *     id?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
