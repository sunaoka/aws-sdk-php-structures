<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\GetAccountLink;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LinkId
 * @property string $LinkedAccountId
 */
class GetAccountLinkRequest extends Request
{
    /**
     * @param array{
     *     LinkId?: string,
     *     LinkedAccountId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
