<?php

namespace Sunaoka\Aws\Structures\Bedrock\StartTrustedAccessProgramOrganizationApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TrustedAccessProgramProviderHandoff|null $providerHandoff
 */
class TrustedAccessProgramApplicationResult extends Shape
{
    /**
     * @param array{providerHandoff?: TrustedAccessProgramProviderHandoff|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
