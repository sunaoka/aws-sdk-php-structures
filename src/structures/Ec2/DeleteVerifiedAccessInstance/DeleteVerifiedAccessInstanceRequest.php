<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteVerifiedAccessInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VerifiedAccessInstanceId
 * @property bool $DryRun
 * @property string $ClientToken
 */
class DeleteVerifiedAccessInstanceRequest extends Request
{
    /**
     * @param array{
     *     VerifiedAccessInstanceId: string,
     *     DryRun?: bool,
     *     ClientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
