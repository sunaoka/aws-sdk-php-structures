<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ProviderType
 * @property string|null $ProjectName
 * @property string|null $CodeSecurityIntegrationArn
 */
class CodeRepositoryDetails extends Shape
{
    /**
     * @param array{
     *     ProviderType?: string|null,
     *     ProjectName?: string|null,
     *     CodeSecurityIntegrationArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
