<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateUserSecurityProfiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $SecurityProfileIds
 * @property string $UserId
 * @property string $InstanceId
 */
class UpdateUserSecurityProfilesRequest extends Request
{
    /**
     * @param array{
     *     SecurityProfileIds: list<string>,
     *     UserId: string,
     *     InstanceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
