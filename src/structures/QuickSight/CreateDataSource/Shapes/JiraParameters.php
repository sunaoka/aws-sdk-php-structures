<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SiteBaseUrl
 */
class JiraParameters extends Shape
{
    /**
     * @param array{SiteBaseUrl: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
