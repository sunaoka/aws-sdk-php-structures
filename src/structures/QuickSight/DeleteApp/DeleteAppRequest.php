<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $AppId
 */
class DeleteAppRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     AppId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
