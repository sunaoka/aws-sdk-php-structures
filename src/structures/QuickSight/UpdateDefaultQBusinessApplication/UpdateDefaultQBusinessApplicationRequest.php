<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDefaultQBusinessApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string|null $Namespace
 * @property string $ApplicationId
 */
class UpdateDefaultQBusinessApplicationRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     Namespace?: string|null,
     *     ApplicationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
