<?php

namespace Sunaoka\Aws\Structures\MPA\StartActiveApprovalTeamDeletion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int|null $PendingWindowDays
 * @property string $Arn
 */
class StartActiveApprovalTeamDeletionRequest extends Request
{
    /**
     * @param array{
     *     PendingWindowDays?: int|null,
     *     Arn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
