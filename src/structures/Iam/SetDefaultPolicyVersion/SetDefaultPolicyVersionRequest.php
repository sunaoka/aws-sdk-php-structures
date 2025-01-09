<?php

namespace Sunaoka\Aws\Structures\Iam\SetDefaultPolicyVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PolicyArn
 * @property string $VersionId
 */
class SetDefaultPolicyVersionRequest extends Request
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
