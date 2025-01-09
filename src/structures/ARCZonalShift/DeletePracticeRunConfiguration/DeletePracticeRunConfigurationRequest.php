<?php

namespace Sunaoka\Aws\Structures\ARCZonalShift\DeletePracticeRunConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceIdentifier
 */
class DeletePracticeRunConfigurationRequest extends Request
{
    /**
     * @param array{resourceIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
