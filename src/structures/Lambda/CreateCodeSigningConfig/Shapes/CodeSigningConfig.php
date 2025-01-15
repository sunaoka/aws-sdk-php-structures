<?php

namespace Sunaoka\Aws\Structures\Lambda\CreateCodeSigningConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CodeSigningConfigId
 * @property string $CodeSigningConfigArn
 * @property string|null $Description
 * @property AllowedPublishers $AllowedPublishers
 * @property CodeSigningPolicies $CodeSigningPolicies
 * @property string $LastModified
 */
class CodeSigningConfig extends Shape
{
    /**
     * @param array{
     *     CodeSigningConfigId: string,
     *     CodeSigningConfigArn: string,
     *     Description?: string|null,
     *     AllowedPublishers: AllowedPublishers,
     *     CodeSigningPolicies: CodeSigningPolicies,
     *     LastModified: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
