<?php

namespace Sunaoka\Aws\Structures\DataZone\GetGroupProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $groupIdentifier
 */
class GetGroupProfileRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     groupIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
