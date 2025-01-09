<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateLocationFsxOpenZfs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LocationArn
 * @property Shapes\FsxProtocol $Protocol
 * @property string $Subdirectory
 */
class UpdateLocationFsxOpenZfsRequest extends Request
{
    /**
     * @param array{
     *     LocationArn: string,
     *     Protocol?: Shapes\FsxProtocol,
     *     Subdirectory?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
