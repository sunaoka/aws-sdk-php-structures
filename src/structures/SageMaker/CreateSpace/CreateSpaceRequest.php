<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateSpace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainId
 * @property string $SpaceName
 * @property list<Shapes\Tag> $Tags
 * @property Shapes\SpaceSettings $SpaceSettings
 * @property Shapes\OwnershipSettings $OwnershipSettings
 * @property Shapes\SpaceSharingSettings $SpaceSharingSettings
 * @property string $SpaceDisplayName
 */
class CreateSpaceRequest extends Request
{
    /**
     * @param array{
     *     DomainId: string,
     *     SpaceName: string,
     *     Tags?: list<Shapes\Tag>,
     *     SpaceSettings?: Shapes\SpaceSettings,
     *     OwnershipSettings?: Shapes\OwnershipSettings,
     *     SpaceSharingSettings?: Shapes\SpaceSharingSettings,
     *     SpaceDisplayName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
