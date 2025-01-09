<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateAnalysisTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipIdentifier
 * @property string $analysisTemplateIdentifier
 * @property string $description
 */
class UpdateAnalysisTemplateRequest extends Request
{
    /**
     * @param array{
     *     membershipIdentifier: string,
     *     analysisTemplateIdentifier: string,
     *     description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
