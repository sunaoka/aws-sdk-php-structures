<?php

namespace Sunaoka\Aws\Structures\LocationService\GetMapSprites;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FileName
 * @property string|null $Key
 * @property string $MapName
 */
class GetMapSpritesRequest extends Request
{
    /**
     * @param array{
     *     FileName: string,
     *     Key?: string|null,
     *     MapName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
