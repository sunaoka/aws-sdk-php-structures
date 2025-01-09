<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Description
 * @property string $State
 * @property AwsAthenaWorkGroupConfigurationDetails $Configuration
 */
class AwsAthenaWorkGroupDetails extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Description?: string,
     *     State?: string,
     *     Configuration?: AwsAthenaWorkGroupConfigurationDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
