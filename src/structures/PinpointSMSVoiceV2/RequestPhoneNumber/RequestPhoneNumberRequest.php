<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\RequestPhoneNumber;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IsoCountryCode
 * @property 'TRANSACTIONAL'|'PROMOTIONAL' $MessageType
 * @property list<'SMS'|'VOICE'|'MMS'> $NumberCapabilities
 * @property 'LONG_CODE'|'TOLL_FREE'|'TEN_DLC'|'SIMULATOR' $NumberType
 * @property string|null $OptOutListName
 * @property string|null $PoolId
 * @property string|null $RegistrationId
 * @property bool|null $DeletionProtectionEnabled
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $ClientToken
 */
class RequestPhoneNumberRequest extends Request
{
    /**
     * @param array{
     *     IsoCountryCode: string,
     *     MessageType: 'TRANSACTIONAL'|'PROMOTIONAL',
     *     NumberCapabilities: list<'SMS'|'VOICE'|'MMS'>,
     *     NumberType: 'LONG_CODE'|'TOLL_FREE'|'TEN_DLC'|'SIMULATOR',
     *     OptOutListName?: string|null,
     *     PoolId?: string|null,
     *     RegistrationId?: string|null,
     *     DeletionProtectionEnabled?: bool|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
