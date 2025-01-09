<?php

namespace Sunaoka\Aws\Structures\WellArchitected\DeleteProfileShare;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ShareId
 * @property string $ProfileArn
 * @property string $ClientRequestToken
 */
class DeleteProfileShareRequest extends Request
{
    /**
     * @param array{
     *     ShareId: string,
     *     ProfileArn: string,
     *     ClientRequestToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
