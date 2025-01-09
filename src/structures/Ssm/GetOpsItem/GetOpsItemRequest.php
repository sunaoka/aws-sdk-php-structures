<?php

namespace Sunaoka\Aws\Structures\Ssm\GetOpsItem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OpsItemId
 * @property string $OpsItemArn
 */
class GetOpsItemRequest extends Request
{
    /**
     * @param array{
     *     OpsItemId: string,
     *     OpsItemArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
