<?php

namespace Sunaoka\Aws\Structures\OpsWorks\GetHostnameSuggestion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LayerId
 */
class GetHostnameSuggestionRequest extends Request
{
    /**
     * @param array{LayerId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
