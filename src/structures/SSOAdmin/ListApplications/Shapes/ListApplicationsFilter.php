<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationAccount
 * @property string $ApplicationProvider
 */
class ListApplicationsFilter extends Shape
{
    /**
     * @param array{
     *     ApplicationAccount?: string,
     *     ApplicationProvider?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
