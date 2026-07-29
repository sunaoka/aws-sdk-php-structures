<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateEnrichmentJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceName
 * @property Shapes\EnrichmentJobConfiguration $jobConfiguration
 * @property string|null $clientToken
 */
class CreateEnrichmentJobRequest extends Request
{
    /**
     * @param array{
     *     workspaceName: string,
     *     jobConfiguration: Shapes\EnrichmentJobConfiguration,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
