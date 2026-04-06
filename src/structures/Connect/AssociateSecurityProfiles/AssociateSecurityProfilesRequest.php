<?php

namespace Sunaoka\Aws\Structures\Connect\AssociateSecurityProfiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property list<Shapes\SecurityProfileItem> $SecurityProfiles
 * @property 'USER'|'AI_AGENT' $EntityType
 * @property string $EntityArn
 */
class AssociateSecurityProfilesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     SecurityProfiles: list<Shapes\SecurityProfileItem>,
     *     EntityType: 'USER'|'AI_AGENT',
     *     EntityArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
