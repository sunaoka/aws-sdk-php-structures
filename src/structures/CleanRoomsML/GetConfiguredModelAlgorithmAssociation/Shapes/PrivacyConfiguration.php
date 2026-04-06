<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetConfiguredModelAlgorithmAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PrivacyConfigurationPolicies $policies
 */
class PrivacyConfiguration extends Shape
{
    /**
     * @param array{policies: PrivacyConfigurationPolicies} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
