<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateBrandAssignment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $BrandArn
 */
class UpdateBrandAssignmentRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     BrandArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
