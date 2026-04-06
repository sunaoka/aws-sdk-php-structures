<?php

namespace Sunaoka\Aws\Structures\Macie2\UpdateRevealConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\RevealConfiguration $configuration
 */
class UpdateRevealConfigurationRequest extends Request
{
    /**
     * @param array{configuration: Shapes\RevealConfiguration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
