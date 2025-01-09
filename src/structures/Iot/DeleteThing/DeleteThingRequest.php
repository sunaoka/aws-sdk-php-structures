<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteThing;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $thingName
 * @property int $expectedVersion
 */
class DeleteThingRequest extends Request
{
    /**
     * @param array{
     *     thingName: string,
     *     expectedVersion?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
