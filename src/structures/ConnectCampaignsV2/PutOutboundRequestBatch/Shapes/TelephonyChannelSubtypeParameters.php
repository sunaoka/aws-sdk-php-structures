<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\PutOutboundRequestBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $destinationPhoneNumber
 * @property array<string, string> $attributes
 * @property string $connectSourcePhoneNumber
 * @property AnswerMachineDetectionConfig $answerMachineDetectionConfig
 */
class TelephonyChannelSubtypeParameters extends Shape
{
    /**
     * @param array{
     *     destinationPhoneNumber: string,
     *     attributes: array<string, string>,
     *     connectSourcePhoneNumber?: string,
     *     answerMachineDetectionConfig?: AnswerMachineDetectionConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
