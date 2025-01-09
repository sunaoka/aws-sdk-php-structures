<?php

namespace Sunaoka\Aws\Structures\Macie2\PutClassificationExportConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ClassificationExportConfiguration $configuration
 */
class PutClassificationExportConfigurationRequest extends Request
{
    /**
     * @param array{configuration: Shapes\ClassificationExportConfiguration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
