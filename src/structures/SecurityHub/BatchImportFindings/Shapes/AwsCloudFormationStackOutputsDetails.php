<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Description
 * @property string $OutputKey
 * @property string $OutputValue
 */
class AwsCloudFormationStackOutputsDetails extends Shape
{
    /**
     * @param array{
     *     Description?: string,
     *     OutputKey?: string,
     *     OutputValue?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
