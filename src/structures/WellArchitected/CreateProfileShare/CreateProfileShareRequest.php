<?php

namespace Sunaoka\Aws\Structures\WellArchitected\CreateProfileShare;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProfileArn
 * @property string $SharedWith
 * @property string $ClientRequestToken
 */
class CreateProfileShareRequest extends Request
{
    /**
     * @param array{
     *     ProfileArn: string,
     *     SharedWith: string,
     *     ClientRequestToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
