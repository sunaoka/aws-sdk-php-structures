<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateCapacityProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $licenseConfigurationArn
 */
class LicenseSpecification extends Shape
{
    /**
     * @param array{licenseConfigurationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
