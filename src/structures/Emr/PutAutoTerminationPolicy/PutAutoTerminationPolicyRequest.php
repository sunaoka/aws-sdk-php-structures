<?php

namespace Sunaoka\Aws\Structures\Emr\PutAutoTerminationPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterId
 * @property Shapes\AutoTerminationPolicy|null $AutoTerminationPolicy
 */
class PutAutoTerminationPolicyRequest extends Request
{
    /**
     * @param array{
     *     ClusterId: string,
     *     AutoTerminationPolicy?: Shapes\AutoTerminationPolicy|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
