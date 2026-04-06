<?php

namespace Sunaoka\Aws\Structures\OAM\GetSink;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 * @property bool|null $IncludeTags
 */
class GetSinkRequest extends Request
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
