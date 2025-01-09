<?php

namespace Sunaoka\Aws\Structures\GameLift\DeleteContainerGroupDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property int $VersionNumber
 * @property int $VersionCountToRetain
 */
class DeleteContainerGroupDefinitionRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     VersionNumber?: int,
     *     VersionCountToRetain?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
