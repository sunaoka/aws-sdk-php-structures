<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Hostname
 * @property string $IpAddress
 */
class AwsEcsTaskDefinitionContainerDefinitionsExtraHostsDetails extends Shape
{
    /**
     * @param array{
     *     Hostname?: string,
     *     IpAddress?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
