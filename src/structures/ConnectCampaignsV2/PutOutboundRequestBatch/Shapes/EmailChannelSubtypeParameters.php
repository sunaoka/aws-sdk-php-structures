<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\PutOutboundRequestBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $destinationEmailAddress
 * @property string|null $connectSourceEmailAddress
 * @property string|null $templateArn
 * @property array<string, string> $templateParameters
 */
class EmailChannelSubtypeParameters extends Shape
{
    /**
     * @param array{
     *     destinationEmailAddress: string,
     *     connectSourceEmailAddress?: string|null,
     *     templateArn?: string|null,
     *     templateParameters: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
