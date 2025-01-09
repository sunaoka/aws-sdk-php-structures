<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\AttachPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryArn
 * @property Shapes\ObjectReference $PolicyReference
 * @property Shapes\ObjectReference $ObjectReference
 */
class AttachPolicyRequest extends Request
{
    /**
     * @param array{
     *     DirectoryArn: string,
     *     PolicyReference: Shapes\ObjectReference,
     *     ObjectReference: Shapes\ObjectReference
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
