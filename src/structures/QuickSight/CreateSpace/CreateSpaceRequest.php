<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateSpace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $SpaceId
 * @property string $Name
 * @property string|null $Description
 */
class CreateSpaceRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     SpaceId: string,
     *     Name: string,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
