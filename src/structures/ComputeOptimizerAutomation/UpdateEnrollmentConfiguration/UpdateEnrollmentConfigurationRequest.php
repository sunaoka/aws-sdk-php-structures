<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\UpdateEnrollmentConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Active'|'Inactive'|'Pending'|'Failed' $status
 * @property string|null $clientToken
 */
class UpdateEnrollmentConfigurationRequest extends Request
{
    /**
     * @param array{
     *     status: 'Active'|'Inactive'|'Pending'|'Failed',
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
