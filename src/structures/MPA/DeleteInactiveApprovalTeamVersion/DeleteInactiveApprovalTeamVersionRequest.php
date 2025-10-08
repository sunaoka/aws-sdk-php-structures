<?php

namespace Sunaoka\Aws\Structures\MPA\DeleteInactiveApprovalTeamVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property string $VersionId
 */
class DeleteInactiveApprovalTeamVersionRequest extends Request
{
    /**
     * @param array{
     *     Arn: string,
     *     VersionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
