<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\PutDialRequestBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $attributes
 * @property string $clientToken
 * @property \Aws\Api\DateTimeResult $expirationTime
 * @property string $phoneNumber
 */
class DialRequest extends Shape
{
    /**
     * @param array{
     *     attributes: array<string, string>,
     *     clientToken: string,
     *     expirationTime: \Aws\Api\DateTimeResult,
     *     phoneNumber: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
