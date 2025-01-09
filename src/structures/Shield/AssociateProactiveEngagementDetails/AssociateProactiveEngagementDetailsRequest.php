<?php

namespace Sunaoka\Aws\Structures\Shield\AssociateProactiveEngagementDetails;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\EmergencyContact> $EmergencyContactList
 */
class AssociateProactiveEngagementDetailsRequest extends Request
{
    /**
     * @param array{EmergencyContactList: list<Shapes\EmergencyContact>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
