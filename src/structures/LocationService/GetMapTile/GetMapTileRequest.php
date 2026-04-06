<?php

namespace Sunaoka\Aws\Structures\LocationService\GetMapTile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Key
 * @property string $MapName
 * @property string $X
 * @property string $Y
 * @property string $Z
 */
class GetMapTileRequest extends Request
{
    /**
     * @param array{
     *     Key?: string|null,
     *     MapName: string,
     *     X: string,
     *     Y: string,
     *     Z: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
