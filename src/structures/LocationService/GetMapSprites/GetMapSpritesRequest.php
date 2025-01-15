<?php

namespace Sunaoka\Aws\Structures\LocationService\GetMapSprites;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MapName
 * @property string $FileName
 * @property string|null $Key
 */
class GetMapSpritesRequest extends Request
{
    /**
     * @param array{
     *     MapName: string,
     *     FileName: string,
     *     Key?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
