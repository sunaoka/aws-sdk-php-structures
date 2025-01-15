<?php

namespace Sunaoka\Aws\Structures\Kms\RevokeGrant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyId
 * @property string $GrantId
 * @property bool|null $DryRun
 */
class RevokeGrantRequest extends Request
{
    /**
     * @param array{
     *     KeyId: string,
     *     GrantId: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
