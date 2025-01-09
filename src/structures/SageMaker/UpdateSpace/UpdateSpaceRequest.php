<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateSpace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainId
 * @property string $SpaceName
 * @property Shapes\SpaceSettings $SpaceSettings
 * @property string $SpaceDisplayName
 */
class UpdateSpaceRequest extends Request
{
    /**
     * @param array{
     *     DomainId: string,
     *     SpaceName: string,
     *     SpaceSettings?: Shapes\SpaceSettings,
     *     SpaceDisplayName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
