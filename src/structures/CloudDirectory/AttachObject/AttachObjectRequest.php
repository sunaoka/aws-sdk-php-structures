<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\AttachObject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryArn
 * @property Shapes\ObjectReference $ParentReference
 * @property Shapes\ObjectReference $ChildReference
 * @property string $LinkName
 */
class AttachObjectRequest extends Request
{
    /**
     * @param array{
     *     DirectoryArn: string,
     *     ParentReference: Shapes\ObjectReference,
     *     ChildReference: Shapes\ObjectReference,
     *     LinkName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
