<?php

namespace Sunaoka\Aws\Structures\ConfigService\DeleteServiceLinkedConfigurationRecorder;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ServicePrincipal
 * @property string|null $Arn
 */
class DeleteServiceLinkedConfigurationRecorderRequest extends Request
{
    /**
     * @param array{
     *     ServicePrincipal?: string|null,
     *     Arn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
