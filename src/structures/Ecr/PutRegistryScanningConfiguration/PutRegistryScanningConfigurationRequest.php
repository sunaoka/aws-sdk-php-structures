<?php

namespace Sunaoka\Aws\Structures\Ecr\PutRegistryScanningConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'BASIC'|'ENHANCED' $scanType
 * @property list<Shapes\RegistryScanningRule> $rules
 */
class PutRegistryScanningConfigurationRequest extends Request
{
    /**
     * @param array{
     *     scanType?: 'BASIC'|'ENHANCED',
     *     rules?: list<Shapes\RegistryScanningRule>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
