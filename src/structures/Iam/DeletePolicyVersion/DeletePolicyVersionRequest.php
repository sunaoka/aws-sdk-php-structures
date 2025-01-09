<?php

namespace Sunaoka\Aws\Structures\Iam\DeletePolicyVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PolicyArn
 * @property string $VersionId
 */
class DeletePolicyVersionRequest extends Request
{
    /**
     * @param array{
     *     PolicyArn: string,
     *     VersionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
