<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateLocationFsxOntap;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LocationArn
 * @property Shapes\FsxUpdateProtocol|null $Protocol
 * @property string|null $Subdirectory
 */
class UpdateLocationFsxOntapRequest extends Request
{
    /**
     * @param array{
     *     LocationArn: string,
     *     Protocol?: Shapes\FsxUpdateProtocol|null,
     *     Subdirectory?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
