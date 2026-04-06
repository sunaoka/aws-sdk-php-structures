<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\PutOutboundRequestBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $destinationPhoneNumber
 * @property array<string, string> $attributes
 * @property string|null $connectSourcePhoneNumber
 * @property AnswerMachineDetectionConfig|null $answerMachineDetectionConfig
 * @property int<15, 60>|null $ringTimeout
 */
class TelephonyChannelSubtypeParameters extends Shape
{
    /**
     * @param array{
     *     destinationPhoneNumber: string,
     *     attributes: array<string, string>,
     *     connectSourcePhoneNumber?: string|null,
     *     answerMachineDetectionConfig?: AnswerMachineDetectionConfig|null,
     *     ringTimeout?: int<15, 60>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
