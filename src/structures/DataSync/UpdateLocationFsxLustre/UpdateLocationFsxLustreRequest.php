<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateLocationFsxLustre;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LocationArn
 * @property string|null $Subdirectory
 */
class UpdateLocationFsxLustreRequest extends Request
{
    /**
     * @param array{
     *     LocationArn: string,
     *     Subdirectory?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
