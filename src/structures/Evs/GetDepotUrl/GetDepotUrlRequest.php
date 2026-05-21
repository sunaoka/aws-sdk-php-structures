<?php

namespace Sunaoka\Aws\Structures\Evs\GetDepotUrl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 * @property bool|null $rotate
 */
class GetDepotUrlRequest extends Request
{
    /**
     * @param array{
     *     environmentId: string,
     *     rotate?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
