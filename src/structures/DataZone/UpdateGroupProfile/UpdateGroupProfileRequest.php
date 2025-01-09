<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateGroupProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $groupIdentifier
 * @property 'ASSIGNED'|'NOT_ASSIGNED' $status
 */
class UpdateGroupProfileRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     groupIdentifier: string,
     *     status: 'ASSIGNED'|'NOT_ASSIGNED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
