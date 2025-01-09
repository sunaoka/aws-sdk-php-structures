<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CreateFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property array<string, string> $tags
 */
class CreateFleetRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
