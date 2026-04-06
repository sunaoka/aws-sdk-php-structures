<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateBrowser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResourceLocation $location
 * @property 'MANAGED'|'RECOMMENDED'|null $type
 */
class BrowserEnterprisePolicy extends Shape
{
    /**
     * @param array{
     *     location: ResourceLocation,
     *     type?: 'MANAGED'|'RECOMMENDED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
