<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\RequestPhoneNumber;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IsoCountryCode
 * @property 'TRANSACTIONAL'|'PROMOTIONAL' $MessageType
 * @property list<'SMS'|'VOICE'|'MMS'> $NumberCapabilities
 * @property 'LONG_CODE'|'TOLL_FREE'|'TEN_DLC'|'SIMULATOR' $NumberType
 * @property string $OptOutListName
 * @property string $PoolId
 * @property string $RegistrationId
 * @property bool $DeletionProtectionEnabled
 * @property list<Shapes\Tag> $Tags
 * @property string $ClientToken
 */
class RequestPhoneNumberRequest extends Request
{
    /**
     * @param array{
     *     IsoCountryCode: string,
     *     MessageType: 'TRANSACTIONAL'|'PROMOTIONAL',
     *     NumberCapabilities: list<'SMS'|'VOICE'|'MMS'>,
     *     NumberType: 'LONG_CODE'|'TOLL_FREE'|'TEN_DLC'|'SIMULATOR',
     *     OptOutListName?: string,
     *     PoolId?: string,
     *     RegistrationId?: string,
     *     DeletionProtectionEnabled?: bool,
     *     Tags?: list<Shapes\Tag>,
     *     ClientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
