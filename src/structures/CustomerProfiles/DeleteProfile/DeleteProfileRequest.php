<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\DeleteProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProfileId
 * @property string $DomainName
 */
class DeleteProfileRequest extends Request
{
    /**
     * @param array{
     *     ProfileId: string,
     *     DomainName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
