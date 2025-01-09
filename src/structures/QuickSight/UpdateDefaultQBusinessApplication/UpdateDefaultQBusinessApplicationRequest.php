<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDefaultQBusinessApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $Namespace
 * @property string $ApplicationId
 */
class UpdateDefaultQBusinessApplicationRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     Namespace?: string,
     *     ApplicationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
