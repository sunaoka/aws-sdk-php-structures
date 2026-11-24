<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateSnapmirrorRelationship;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientRequestToken
 * @property string $SnapmirrorRelationshipId
 * @property string|null $PolicyId
 * @property string|null $TransferSchedule
 * @property int<0, max>|null $ThrottleInKbps
 * @property 'SNAPMIRRORED'|'PAUSED'|'BROKEN_OFF'|null $State
 */
class UpdateSnapmirrorRelationshipRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken?: string|null,
     *     SnapmirrorRelationshipId: string,
     *     PolicyId?: string|null,
     *     TransferSchedule?: string|null,
     *     ThrottleInKbps?: int<0, max>|null,
     *     State?: 'SNAPMIRRORED'|'PAUSED'|'BROKEN_OFF'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
