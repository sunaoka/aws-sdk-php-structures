<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\PutVoiceConnectorExternalSystemsConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'RIBBON_SBC'|'ORACLE_ACME_PACKET_SBC'|'AVAYA_SBCE'|'CISCO_UNIFIED_BORDER_ELEMENT'|'AUDIOCODES_MEDIANT_SBC'> $SessionBorderControllerTypes
 * @property list<'GENESYS_ENGAGE_ON_PREMISES'|'AVAYA_AURA_CALL_CENTER_ELITE'|'AVAYA_AURA_CONTACT_CENTER'|'CISCO_UNIFIED_CONTACT_CENTER_ENTERPRISE'> $ContactCenterSystemTypes
 */
class ExternalSystemsConfiguration extends Shape
{
    /**
     * @param array{
     *     SessionBorderControllerTypes?: list<'RIBBON_SBC'|'ORACLE_ACME_PACKET_SBC'|'AVAYA_SBCE'|'CISCO_UNIFIED_BORDER_ELEMENT'|'AUDIOCODES_MEDIANT_SBC'>,
     *     ContactCenterSystemTypes?: list<'GENESYS_ENGAGE_ON_PREMISES'|'AVAYA_AURA_CALL_CENTER_ELITE'|'AVAYA_AURA_CONTACT_CENTER'|'CISCO_UNIFIED_CONTACT_CENTER_ENTERPRISE'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
