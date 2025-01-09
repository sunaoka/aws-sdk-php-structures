<?php

namespace Sunaoka\Aws\Structures\QBusiness\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $subnetIds
 * @property list<string> $securityGroupIds
 */
class DataSourceVpcConfiguration extends Shape
{
    /**
     * @param array{
     *     subnetIds: list<string>,
     *     securityGroupIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
