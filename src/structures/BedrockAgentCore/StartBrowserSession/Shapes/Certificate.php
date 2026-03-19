<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StartBrowserSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CertificateLocation $location
 */
class Certificate extends Shape
{
    /**
     * @param array{location: CertificateLocation} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
