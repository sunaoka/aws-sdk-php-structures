<?php

namespace Sunaoka\Aws\Structures\Ecr\PutRegistryScanningConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'BASIC'|'ENHANCED'|null $scanType
 * @property list<Shapes\RegistryScanningRule>|null $rules
 */
class PutRegistryScanningConfigurationRequest extends Request
{
    /**
     * @param array{
     *     scanType?: 'BASIC'|'ENHANCED'|null,
     *     rules?: list<Shapes\RegistryScanningRule>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
