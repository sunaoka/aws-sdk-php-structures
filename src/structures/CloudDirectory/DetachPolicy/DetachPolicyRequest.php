<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\DetachPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryArn
 * @property Shapes\ObjectReference $PolicyReference
 * @property Shapes\ObjectReference $ObjectReference
 */
class DetachPolicyRequest extends Request
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
