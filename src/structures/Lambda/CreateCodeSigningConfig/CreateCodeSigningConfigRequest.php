<?php

namespace Sunaoka\Aws\Structures\Lambda\CreateCodeSigningConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Description
 * @property Shapes\AllowedPublishers $AllowedPublishers
 * @property Shapes\CodeSigningPolicies|null $CodeSigningPolicies
 */
class CreateCodeSigningConfigRequest extends Request
{
    /**
     * @param array{
     *     Description?: string|null,
     *     AllowedPublishers: Shapes\AllowedPublishers,
     *     CodeSigningPolicies?: Shapes\CodeSigningPolicies|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
