<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateLocationFsxOpenZfs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LocationArn
 * @property Shapes\FsxProtocol|null $Protocol
 * @property string|null $Subdirectory
 */
class UpdateLocationFsxOpenZfsRequest extends Request
{
    /**
     * @param array{
     *     LocationArn: string,
     *     Protocol?: Shapes\FsxProtocol|null,
     *     Subdirectory?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
