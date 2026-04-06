<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\CreateConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $SecurityGroupIds
 */
class VpcInformation extends Shape
{
    /**
     * @param array{SecurityGroupIds: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
