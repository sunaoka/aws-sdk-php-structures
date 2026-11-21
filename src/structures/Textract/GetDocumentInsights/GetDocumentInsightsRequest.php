<?php

namespace Sunaoka\Aws\Structures\Textract\GetDocumentInsights;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobArn
 */
class GetDocumentInsightsRequest extends Request
{
    /**
     * @param array{JobArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
