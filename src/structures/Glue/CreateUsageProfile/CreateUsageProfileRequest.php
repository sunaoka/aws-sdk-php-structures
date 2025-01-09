<?php

namespace Sunaoka\Aws\Structures\Glue\CreateUsageProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Description
 * @property Shapes\ProfileConfiguration $Configuration
 * @property array<string, string> $Tags
 */
class CreateUsageProfileRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string,
     *     Configuration: Shapes\ProfileConfiguration,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
