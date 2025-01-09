<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\GetEntities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ids
 * @property int $namespaceVersion
 */
class GetEntitiesRequest extends Request
{
    /**
     * @param array{
     *     ids: list<string>,
     *     namespaceVersion?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
