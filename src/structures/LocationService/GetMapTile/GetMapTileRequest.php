<?php

namespace Sunaoka\Aws\Structures\LocationService\GetMapTile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MapName
 * @property string $Z
 * @property string $X
 * @property string $Y
 * @property string|null $Key
 */
class GetMapTileRequest extends Request
{
    /**
     * @param array{
     *     MapName: string,
     *     Z: string,
     *     X: string,
     *     Y: string,
     *     Key?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
