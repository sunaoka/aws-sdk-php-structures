<?php

namespace Sunaoka\Aws\Structures\FSx\DeleteSnapmirrorRelationship;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientRequestToken
 * @property string $SnapmirrorRelationshipId
 */
class DeleteSnapmirrorRelationshipRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken?: string|null,
     *     SnapmirrorRelationshipId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
