<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\DetachObject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryArn
 * @property Shapes\ObjectReference $ParentReference
 * @property string $LinkName
 */
class DetachObjectRequest extends Request
{
    /**
     * @param array{
     *     DirectoryArn: string,
     *     ParentReference: Shapes\ObjectReference,
     *     LinkName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
