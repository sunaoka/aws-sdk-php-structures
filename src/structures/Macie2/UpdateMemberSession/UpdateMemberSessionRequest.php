<?php

namespace Sunaoka\Aws\Structures\Macie2\UpdateMemberSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property 'PAUSED'|'ENABLED' $status
 */
class UpdateMemberSessionRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     status: 'PAUSED'|'ENABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
