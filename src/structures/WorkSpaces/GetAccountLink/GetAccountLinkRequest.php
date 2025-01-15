<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\GetAccountLink;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $LinkId
 * @property string|null $LinkedAccountId
 */
class GetAccountLinkRequest extends Request
{
    /**
     * @param array{
     *     LinkId?: string|null,
     *     LinkedAccountId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
