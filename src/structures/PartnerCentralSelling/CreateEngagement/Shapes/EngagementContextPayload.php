<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\CreateEngagement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomerProjectsContext $CustomerProject
 */
class EngagementContextPayload extends Shape
{
    /**
     * @param array{CustomerProject?: CustomerProjectsContext} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
