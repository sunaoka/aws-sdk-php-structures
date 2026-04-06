<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\PutDialRequestBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $clientToken
 * @property string $phoneNumber
 * @property \Aws\Api\DateTimeResult $expirationTime
 * @property array<string, string> $attributes
 */
class DialRequest extends Shape
{
    /**
     * @param array{
     *     clientToken: string,
     *     phoneNumber: string,
     *     expirationTime: \Aws\Api\DateTimeResult,
     *     attributes: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
