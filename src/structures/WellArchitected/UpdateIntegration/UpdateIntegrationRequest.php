<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpdateIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkloadId
 * @property string $ClientRequestToken
 * @property 'JIRA' $IntegratingService
 */
class UpdateIntegrationRequest extends Request
{
    /**
     * @param array{
     *     WorkloadId: string,
     *     ClientRequestToken: string,
     *     IntegratingService: 'JIRA'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
