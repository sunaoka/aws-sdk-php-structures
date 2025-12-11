<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Enabled
 * @property Readiness|null $Readiness
 */
class DataStoreResponse extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool|null,
     *     Readiness?: Readiness|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
