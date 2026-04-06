<?php

namespace Sunaoka\Aws\Structures\DSQL\DeleteClusterPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $identifier
 * @property string|null $expectedPolicyVersion
 * @property string|null $clientToken
 */
class DeleteClusterPolicyRequest extends Request
{
    /**
     * @param array{
     *     identifier: string,
     *     expectedPolicyVersion?: string|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
