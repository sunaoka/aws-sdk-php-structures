<?php

namespace Sunaoka\Aws\Structures\LambdaWeb\DeleteResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceArn
 * @property string|null $revisionId
 */
class DeleteResourcePolicyRequest extends Request
{
    /**
     * @param array{
     *     resourceArn: string,
     *     revisionId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
