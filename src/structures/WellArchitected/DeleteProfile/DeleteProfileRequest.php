<?php

namespace Sunaoka\Aws\Structures\WellArchitected\DeleteProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProfileArn
 * @property string $ClientRequestToken
 */
class DeleteProfileRequest extends Request
{
    /**
     * @param array{
     *     ProfileArn: string,
     *     ClientRequestToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
