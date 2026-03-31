<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListIntegrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GITHUB'|null $provider
 * @property 'SOURCE_CODE'|'DOCUMENTATION'|null $providerType
 */
class IntegrationFilter extends Shape
{
    /**
     * @param array{
     *     provider?: 'GITHUB'|null,
     *     providerType?: 'SOURCE_CODE'|'DOCUMENTATION'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
