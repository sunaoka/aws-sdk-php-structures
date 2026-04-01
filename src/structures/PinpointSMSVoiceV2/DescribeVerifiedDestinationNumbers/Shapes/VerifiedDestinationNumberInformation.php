<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeVerifiedDestinationNumbers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VerifiedDestinationNumberArn
 * @property string $VerifiedDestinationNumberId
 * @property string $DestinationPhoneNumber
 * @property 'PENDING'|'VERIFIED'|'UNSUPPORTED' $Status
 * @property string|null $RcsAgentId
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 */
class VerifiedDestinationNumberInformation extends Shape
{
    /**
     * @param array{
     *     VerifiedDestinationNumberArn: string,
     *     VerifiedDestinationNumberId: string,
     *     DestinationPhoneNumber: string,
     *     Status: 'PENDING'|'VERIFIED'|'UNSUPPORTED',
     *     RcsAgentId?: string|null,
     *     CreatedTimestamp: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
