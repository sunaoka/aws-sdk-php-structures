<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\AttachToIndex;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryArn
 * @property Shapes\ObjectReference $IndexReference
 * @property Shapes\ObjectReference $TargetReference
 */
class AttachToIndexRequest extends Request
{
    /**
     * @param array{
     *     DirectoryArn: string,
     *     IndexReference: Shapes\ObjectReference,
     *     TargetReference: Shapes\ObjectReference
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
