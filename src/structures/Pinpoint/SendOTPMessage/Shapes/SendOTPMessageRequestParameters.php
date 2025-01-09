<?php

namespace Sunaoka\Aws\Structures\Pinpoint\SendOTPMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $AllowedAttempts
 * @property string $BrandName
 * @property string $Channel
 * @property int $CodeLength
 * @property string $DestinationIdentity
 * @property string $EntityId
 * @property string $Language
 * @property string $OriginationIdentity
 * @property string $ReferenceId
 * @property string $TemplateId
 * @property int $ValidityPeriod
 */
class SendOTPMessageRequestParameters extends Shape
{
    /**
     * @param array{
     *     AllowedAttempts?: int,
     *     BrandName: string,
     *     Channel: string,
     *     CodeLength?: int,
     *     DestinationIdentity: string,
     *     EntityId?: string,
     *     Language?: string,
     *     OriginationIdentity: string,
     *     ReferenceId: string,
     *     TemplateId?: string,
     *     ValidityPeriod?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
