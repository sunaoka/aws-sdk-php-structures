<?php

namespace Sunaoka\Aws\Structures\OAM\GetLink;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 * @property bool|null $IncludeTags
 */
class GetLinkRequest extends Request
{
    /**
     * @param array{
     *     Identifier: string,
     *     IncludeTags?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
