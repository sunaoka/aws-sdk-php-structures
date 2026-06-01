<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateSpaceResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $SpaceId
 * @property list<Shapes\SpaceResourceOperation>|null $AddResources
 * @property list<Shapes\SpaceResourceOperation>|null $RemoveResources
 */
class UpdateSpaceResourcesRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     SpaceId: string,
     *     AddResources?: list<Shapes\SpaceResourceOperation>|null,
     *     RemoveResources?: list<Shapes\SpaceResourceOperation>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
