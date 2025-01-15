<?php

namespace Sunaoka\Aws\Structures\Kms\RetireGrant;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $GrantToken
 * @property string|null $KeyId
 * @property string|null $GrantId
 * @property bool|null $DryRun
 */
class RetireGrantRequest extends Request
{
    /**
     * @param array{
     *     GrantToken?: string|null,
     *     KeyId?: string|null,
     *     GrantId?: string|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
