<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\PutOutboundRequestBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $destinationEmailAddress
 * @property string $connectSourceEmailAddress
 * @property string $templateArn
 * @property array<string, string> $templateParameters
 */
class EmailChannelSubtypeParameters extends Shape
{
    /**
     * @param array{
     *     destinationEmailAddress: string,
     *     connectSourceEmailAddress?: string,
     *     templateArn?: string,
     *     templateParameters: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
