<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteAccessControlApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string|null $ApplicationId
 * @property string|null $IdcApplicationArn
 */
class DeleteAccessControlApplicationRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     ApplicationId?: string|null,
     *     IdcApplicationArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
