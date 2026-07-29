<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\GetStreamUrl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 * @property string $StreamUrlIdentifier
 */
class GetStreamUrlRequest extends Request
{
    /**
     * @param array{
     *     Identifier: string,
     *     StreamUrlIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
