<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VpcId
 * @property list<string>|null $Subnets
 * @property list<string>|null $SecurityGroupIds
 */
class AwsCodeBuildProjectVpcConfig extends Shape
{
    /**
     * @param array{
     *     VpcId?: string|null,
     *     Subnets?: list<string>|null,
     *     SecurityGroupIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
