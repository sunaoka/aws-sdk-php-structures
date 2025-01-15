<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property string|null $OutputKey
 * @property string|null $OutputValue
 */
class AwsCloudFormationStackOutputsDetails extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     OutputKey?: string|null,
     *     OutputValue?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
