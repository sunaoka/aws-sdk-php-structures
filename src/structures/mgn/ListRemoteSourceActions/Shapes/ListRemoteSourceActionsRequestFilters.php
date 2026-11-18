<?php

namespace Sunaoka\Aws\Structures\mgn\ListRemoteSourceActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $remoteSourceActionIDs
 */
class ListRemoteSourceActionsRequestFilters extends Shape
{
    /**
     * @param array{remoteSourceActionIDs?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
