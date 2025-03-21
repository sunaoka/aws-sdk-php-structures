<?php

namespace Sunaoka\Aws\Structures\Shield\UpdateEmergencyContactSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\EmergencyContact>|null $EmergencyContactList
 */
class UpdateEmergencyContactSettingsRequest extends Request
{
    /**
     * @param array{EmergencyContactList?: list<Shapes\EmergencyContact>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
