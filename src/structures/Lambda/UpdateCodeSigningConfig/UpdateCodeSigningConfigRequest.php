<?php

namespace Sunaoka\Aws\Structures\Lambda\UpdateCodeSigningConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CodeSigningConfigArn
 * @property string $Description
 * @property Shapes\AllowedPublishers $AllowedPublishers
 * @property Shapes\CodeSigningPolicies $CodeSigningPolicies
 */
class UpdateCodeSigningConfigRequest extends Request
{
    /**
     * @param array{
     *     CodeSigningConfigArn: string,
     *     Description?: string,
     *     AllowedPublishers?: Shapes\AllowedPublishers,
     *     CodeSigningPolicies?: Shapes\CodeSigningPolicies
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
