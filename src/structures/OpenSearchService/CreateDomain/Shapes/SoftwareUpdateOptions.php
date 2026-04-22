<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\CreateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $AutoSoftwareUpdateEnabled
 * @property bool|null $UseLatestServiceSoftwareForBlueGreen
 */
class SoftwareUpdateOptions extends Shape
{
    /**
     * @param array{
     *     AutoSoftwareUpdateEnabled?: bool|null,
     *     UseLatestServiceSoftwareForBlueGreen?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
