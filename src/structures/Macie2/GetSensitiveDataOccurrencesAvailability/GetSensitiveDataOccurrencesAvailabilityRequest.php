<?php

namespace Sunaoka\Aws\Structures\Macie2\GetSensitiveDataOccurrencesAvailability;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $findingId
 */
class GetSensitiveDataOccurrencesAvailabilityRequest extends Request
{
    /**
     * @param array{findingId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
