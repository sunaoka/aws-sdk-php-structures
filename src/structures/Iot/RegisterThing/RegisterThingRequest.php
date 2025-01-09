<?php

namespace Sunaoka\Aws\Structures\Iot\RegisterThing;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $templateBody
 * @property array<string, string> $parameters
 */
class RegisterThingRequest extends Request
{
    /**
     * @param array{
     *     templateBody: string,
     *     parameters?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
