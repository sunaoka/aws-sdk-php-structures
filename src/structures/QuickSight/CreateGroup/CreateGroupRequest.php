<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupName
 * @property string|null $Description
 * @property string $AwsAccountId
 * @property string $Namespace
 */
class CreateGroupRequest extends Request
{
    /**
     * @param array{
     *     GroupName: string,
     *     Description?: string|null,
     *     AwsAccountId: string,
     *     Namespace: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
