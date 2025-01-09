<?php

namespace Sunaoka\Aws\Structures\Kms\RetireGrant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GrantToken
 * @property string $KeyId
 * @property string $GrantId
 * @property bool $DryRun
 */
class RetireGrantRequest extends Request
{
    /**
     * @param array{
     *     GrantToken?: string,
     *     KeyId?: string,
     *     GrantId?: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
