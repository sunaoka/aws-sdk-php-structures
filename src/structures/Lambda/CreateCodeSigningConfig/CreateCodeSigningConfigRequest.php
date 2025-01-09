<?php

namespace Sunaoka\Aws\Structures\Lambda\CreateCodeSigningConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Description
 * @property Shapes\AllowedPublishers $AllowedPublishers
 * @property Shapes\CodeSigningPolicies $CodeSigningPolicies
 * @property array<string, string> $Tags
 */
class CreateCodeSigningConfigRequest extends Request
{
    /**
     * @param array{
     *     Description?: string,
     *     AllowedPublishers: Shapes\AllowedPublishers,
     *     CodeSigningPolicies?: Shapes\CodeSigningPolicies,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
