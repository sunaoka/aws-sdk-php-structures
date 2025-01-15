<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateSpace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainId
 * @property string $SpaceName
 * @property list<Shapes\Tag>|null $Tags
 * @property Shapes\SpaceSettings|null $SpaceSettings
 * @property Shapes\OwnershipSettings|null $OwnershipSettings
 * @property Shapes\SpaceSharingSettings|null $SpaceSharingSettings
 * @property string|null $SpaceDisplayName
 */
class CreateSpaceRequest extends Request
{
    /**
     * @param array{
     *     DomainId: string,
     *     SpaceName: string,
     *     Tags?: list<Shapes\Tag>|null,
     *     SpaceSettings?: Shapes\SpaceSettings|null,
     *     OwnershipSettings?: Shapes\OwnershipSettings|null,
     *     SpaceSharingSettings?: Shapes\SpaceSharingSettings|null,
     *     SpaceDisplayName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
