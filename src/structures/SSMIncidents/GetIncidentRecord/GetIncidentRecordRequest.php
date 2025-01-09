<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\GetIncidentRecord;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class GetIncidentRecordRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
