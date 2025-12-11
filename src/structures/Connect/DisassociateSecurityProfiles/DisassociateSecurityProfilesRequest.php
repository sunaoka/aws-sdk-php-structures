<?php

namespace Sunaoka\Aws\Structures\Connect\DisassociateSecurityProfiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property list<Shapes\SecurityProfileItem> $SecurityProfiles
 * @property 'USER'|'AI_AGENT' $EntityType
 * @property string $EntityArn
 */
class DisassociateSecurityProfilesRequest extends Request
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
