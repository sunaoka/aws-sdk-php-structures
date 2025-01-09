<?php

namespace Sunaoka\Aws\Structures\Macie2\UpdateRevealConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\RevealConfiguration $configuration
 * @property Shapes\UpdateRetrievalConfiguration $retrievalConfiguration
 */
class UpdateRevealConfigurationRequest extends Request
{
    /**
     * @param array{
     *     configuration: Shapes\RevealConfiguration,
     *     retrievalConfiguration?: Shapes\UpdateRetrievalConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
