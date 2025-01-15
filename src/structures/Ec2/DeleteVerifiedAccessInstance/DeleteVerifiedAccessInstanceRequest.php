<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteVerifiedAccessInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VerifiedAccessInstanceId
 * @property bool|null $DryRun
 * @property string|null $ClientToken
 */
class DeleteVerifiedAccessInstanceRequest extends Request
{
    /**
     * @param array{
     *     VerifiedAccessInstanceId: string,
     *     DryRun?: bool|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
