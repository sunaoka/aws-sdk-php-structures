<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateLocationFsxOntap;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LocationArn
 * @property Shapes\FsxUpdateProtocol $Protocol
 * @property string $Subdirectory
 */
class UpdateLocationFsxOntapRequest extends Request
{
    /**
     * @param array{
     *     LocationArn: string,
     *     Protocol?: Shapes\FsxUpdateProtocol,
     *     Subdirectory?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
