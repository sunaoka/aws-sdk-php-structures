<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetComplianceSummaryByResourceType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $ResourceTypes
 */
class GetComplianceSummaryByResourceTypeRequest extends Request
{
    /**
     * @param array{ResourceTypes?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
