<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateUsageProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Description
 * @property Shapes\ProfileConfiguration $Configuration
 */
class UpdateUsageProfileRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     Configuration: Shapes\ProfileConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
