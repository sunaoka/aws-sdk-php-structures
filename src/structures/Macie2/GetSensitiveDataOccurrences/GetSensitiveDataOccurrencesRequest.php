<?php

namespace Sunaoka\Aws\Structures\Macie2\GetSensitiveDataOccurrences;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $findingId
 */
class GetSensitiveDataOccurrencesRequest extends Request
{
    /**
     * @param array{findingId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
