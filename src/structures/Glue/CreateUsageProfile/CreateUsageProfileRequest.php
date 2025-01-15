<?php

namespace Sunaoka\Aws\Structures\Glue\CreateUsageProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Description
 * @property Shapes\ProfileConfiguration $Configuration
 * @property array<string, string>|null $Tags
 */
class CreateUsageProfileRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     Configuration: Shapes\ProfileConfiguration,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
