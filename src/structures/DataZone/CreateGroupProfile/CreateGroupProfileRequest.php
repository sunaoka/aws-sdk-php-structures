<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateGroupProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $groupIdentifier
 * @property string|null $clientToken
 */
class CreateGroupProfileRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     groupIdentifier: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
