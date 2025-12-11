<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\PutOutboundRequestBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $destinationPhoneNumber
 * @property string|null $connectSourcePhoneNumberArn
 * @property string|null $templateArn
 * @property array<string, string> $templateParameters
 */
class WhatsAppChannelSubtypeParameters extends Shape
{
    /**
     * @param array{
     *     destinationPhoneNumber: string,
     *     connectSourcePhoneNumberArn?: string|null,
     *     templateArn?: string|null,
     *     templateParameters: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
