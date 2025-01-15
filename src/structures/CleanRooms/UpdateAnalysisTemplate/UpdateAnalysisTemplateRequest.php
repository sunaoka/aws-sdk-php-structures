<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateAnalysisTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipIdentifier
 * @property string $analysisTemplateIdentifier
 * @property string|null $description
 */
class UpdateAnalysisTemplateRequest extends Request
{
    /**
     * @param array{
     *     membershipIdentifier: string,
     *     analysisTemplateIdentifier: string,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
