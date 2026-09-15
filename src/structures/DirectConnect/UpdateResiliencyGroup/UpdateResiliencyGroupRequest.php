<?php

namespace Sunaoka\Aws\Structures\DirectConnect\UpdateResiliencyGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resiliencyGroupId
 * @property string $resiliencyGroupName
 * @property string|null $clientToken
 */
class UpdateResiliencyGroupRequest extends Request
{
    /**
     * @param array{
     *     resiliencyGroupId: string,
     *     resiliencyGroupName: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
