<?php

namespace Sunaoka\Aws\Structures\GameLift\DeleteContainerGroupDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property int<1, max>|null $VersionNumber
 * @property int<0, max>|null $VersionCountToRetain
 */
class DeleteContainerGroupDefinitionRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     VersionNumber?: int<1, max>|null,
     *     VersionCountToRetain?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
