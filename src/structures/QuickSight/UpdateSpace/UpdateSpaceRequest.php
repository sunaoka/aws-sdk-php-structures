<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateSpace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $SpaceId
 * @property string|null $Name
 * @property string|null $Description
 */
class UpdateSpaceRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     SpaceId: string,
     *     Name?: string|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
