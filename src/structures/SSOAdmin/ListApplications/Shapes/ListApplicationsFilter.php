<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ApplicationAccount
 * @property string|null $ApplicationProvider
 */
class ListApplicationsFilter extends Shape
{
    /**
     * @param array{
     *     ApplicationAccount?: string|null,
     *     ApplicationProvider?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
