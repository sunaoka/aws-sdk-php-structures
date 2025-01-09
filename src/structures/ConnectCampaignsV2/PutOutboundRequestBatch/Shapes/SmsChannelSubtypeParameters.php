<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\PutOutboundRequestBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $destinationPhoneNumber
 * @property string $connectSourcePhoneNumberArn
 * @property string $templateArn
 * @property array<string, string> $templateParameters
 */
class SmsChannelSubtypeParameters extends Shape
{
    /**
     * @param array{
     *     destinationPhoneNumber: string,
     *     connectSourcePhoneNumberArn?: string,
     *     templateArn?: string,
     *     templateParameters: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
