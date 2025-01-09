<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeContainerGroupDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property int<1, max> $VersionNumber
 */
class DescribeContainerGroupDefinitionRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     VersionNumber?: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
