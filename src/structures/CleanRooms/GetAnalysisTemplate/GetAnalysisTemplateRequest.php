<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetAnalysisTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipIdentifier
 * @property string $analysisTemplateIdentifier
 */
class GetAnalysisTemplateRequest extends Request
{
    /**
     * @param array{
     *     membershipIdentifier: string,
     *     analysisTemplateIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
