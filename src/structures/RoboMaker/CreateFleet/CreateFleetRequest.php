<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CreateFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property array<string, string>|null $tags
 */
class CreateFleetRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
