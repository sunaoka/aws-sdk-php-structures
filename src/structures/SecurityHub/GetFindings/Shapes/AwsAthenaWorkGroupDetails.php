<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Description
 * @property string|null $State
 * @property AwsAthenaWorkGroupConfigurationDetails|null $Configuration
 */
class AwsAthenaWorkGroupDetails extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Description?: string|null,
     *     State?: string|null,
     *     Configuration?: AwsAthenaWorkGroupConfigurationDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
