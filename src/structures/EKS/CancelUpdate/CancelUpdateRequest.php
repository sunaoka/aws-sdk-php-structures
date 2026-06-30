<?php

namespace Sunaoka\Aws\Structures\EKS\CancelUpdate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $updateId
 * @property string|null $clientRequestToken
 */
class CancelUpdateRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     updateId: string,
     *     clientRequestToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
