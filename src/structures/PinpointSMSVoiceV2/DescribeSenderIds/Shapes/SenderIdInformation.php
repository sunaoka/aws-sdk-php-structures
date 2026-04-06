<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeSenderIds\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SenderIdArn
 * @property string $SenderId
 * @property string $IsoCountryCode
 * @property list<'TRANSACTIONAL'|'PROMOTIONAL'> $MessageTypes
 * @property string $MonthlyLeasingPrice
 * @property bool $DeletionProtectionEnabled
 * @property bool $Registered
 * @property string|null $RegistrationId
 */
class SenderIdInformation extends Shape
{
    /**
     * @param array{
     *     SenderIdArn: string,
     *     SenderId: string,
     *     IsoCountryCode: string,
     *     MessageTypes: list<'TRANSACTIONAL'|'PROMOTIONAL'>,
     *     MonthlyLeasingPrice: string,
     *     DeletionProtectionEnabled: bool,
     *     Registered: bool,
     *     RegistrationId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
