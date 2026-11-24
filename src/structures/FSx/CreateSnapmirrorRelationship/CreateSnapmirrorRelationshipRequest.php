<?php

namespace Sunaoka\Aws\Structures\FSx\CreateSnapmirrorRelationship;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientRequestToken
 * @property Shapes\CreateSnapmirrorSource $Source
 * @property Shapes\CreateSnapmirrorDestination $Destination
 * @property string|null $PolicyId
 * @property string|null $TransferSchedule
 * @property int<0, max>|null $ThrottleInKbps
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateSnapmirrorRelationshipRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken?: string|null,
     *     Source: Shapes\CreateSnapmirrorSource,
     *     Destination: Shapes\CreateSnapmirrorDestination,
     *     PolicyId?: string|null,
     *     TransferSchedule?: string|null,
     *     ThrottleInKbps?: int<0, max>|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
