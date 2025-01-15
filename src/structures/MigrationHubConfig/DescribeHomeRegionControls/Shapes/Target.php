<?php

namespace Sunaoka\Aws\Structures\MigrationHubConfig\DescribeHomeRegionControls\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ACCOUNT' $Type
 * @property string|null $Id
 */
class Target extends Shape
{
    /**
     * @param array{
     *     Type: 'ACCOUNT',
     *     Id?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
