<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\BatchPutPropertyValues;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property list<Shapes\PropertyValueEntry> $entries
 */
class BatchPutPropertyValuesRequest extends Request
{
    /**
     * @param array{
     *     workspaceId: string,
     *     entries: list<Shapes\PropertyValueEntry>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
