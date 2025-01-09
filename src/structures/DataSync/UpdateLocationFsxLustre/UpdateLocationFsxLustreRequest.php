<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateLocationFsxLustre;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LocationArn
 * @property string $Subdirectory
 */
class UpdateLocationFsxLustreRequest extends Request
{
    /**
     * @param array{
     *     LocationArn: string,
     *     Subdirectory?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
