<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteApplicationStatusCheck;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationStatusCheckId
 * @property string|null $ClientToken
 * @property bool|null $DryRun
 */
class DeleteApplicationStatusCheckRequest extends Request
{
    /**
     * @param array{
     *     ApplicationStatusCheckId: string,
     *     ClientToken?: string|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
