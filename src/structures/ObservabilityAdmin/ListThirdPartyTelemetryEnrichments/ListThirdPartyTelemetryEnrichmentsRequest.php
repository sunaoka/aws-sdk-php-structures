<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\ListThirdPartyTelemetryEnrichments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Initializing'|'Running'|'Stopped'|'Impaired'|null $Status
 * @property 'Azure'|null $TelemetrySource
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListThirdPartyTelemetryEnrichmentsRequest extends Request
{
    /**
     * @param array{
     *     Status?: 'Initializing'|'Running'|'Stopped'|'Impaired'|null,
     *     TelemetrySource?: 'Azure'|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
