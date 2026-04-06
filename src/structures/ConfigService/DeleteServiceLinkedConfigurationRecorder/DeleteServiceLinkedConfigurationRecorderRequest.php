<?php

namespace Sunaoka\Aws\Structures\ConfigService\DeleteServiceLinkedConfigurationRecorder;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServicePrincipal
 */
class DeleteServiceLinkedConfigurationRecorderRequest extends Request
{
    /**
     * @param array{ServicePrincipal: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
