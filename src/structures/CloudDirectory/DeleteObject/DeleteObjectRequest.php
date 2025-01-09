<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\DeleteObject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryArn
 * @property Shapes\ObjectReference $ObjectReference
 */
class DeleteObjectRequest extends Request
{
    /**
     * @param array{
     *     DirectoryArn: string,
     *     ObjectReference: Shapes\ObjectReference
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
