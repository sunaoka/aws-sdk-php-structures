<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Configured
 */
class AwsEc2LaunchTemplateDataHibernationOptionsDetails extends Shape
{
    /**
     * @param array{Configured?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
