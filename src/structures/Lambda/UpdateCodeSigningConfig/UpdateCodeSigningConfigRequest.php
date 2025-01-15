<?php

namespace Sunaoka\Aws\Structures\Lambda\UpdateCodeSigningConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CodeSigningConfigArn
 * @property string|null $Description
 * @property Shapes\AllowedPublishers|null $AllowedPublishers
 * @property Shapes\CodeSigningPolicies|null $CodeSigningPolicies
 */
class UpdateCodeSigningConfigRequest extends Request
{
    /**
     * @param array{
     *     CodeSigningConfigArn: string,
     *     Description?: string|null,
     *     AllowedPublishers?: Shapes\AllowedPublishers|null,
     *     CodeSigningPolicies?: Shapes\CodeSigningPolicies|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
