<?php

namespace Sunaoka\Aws\Structures\Pinpoint\SendOTPMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $AllowedAttempts
 * @property string $BrandName
 * @property string $Channel
 * @property int|null $CodeLength
 * @property string $DestinationIdentity
 * @property string|null $EntityId
 * @property string|null $Language
 * @property string $OriginationIdentity
 * @property string $ReferenceId
 * @property string|null $TemplateId
 * @property int|null $ValidityPeriod
 */
class SendOTPMessageRequestParameters extends Shape
{
    /**
     * @param array{
     *     AllowedAttempts?: int|null,
     *     BrandName: string,
     *     Channel: string,
     *     CodeLength?: int|null,
     *     DestinationIdentity: string,
     *     EntityId?: string|null,
     *     Language?: string|null,
     *     OriginationIdentity: string,
     *     ReferenceId: string,
     *     TemplateId?: string|null,
     *     ValidityPeriod?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
