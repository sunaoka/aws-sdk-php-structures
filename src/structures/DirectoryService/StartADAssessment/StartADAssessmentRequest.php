<?php

namespace Sunaoka\Aws\Structures\DirectoryService\StartADAssessment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AssessmentConfiguration|null $AssessmentConfiguration
 * @property string|null $DirectoryId
 */
class StartADAssessmentRequest extends Request
{
    /**
     * @param array{
     *     AssessmentConfiguration?: Shapes\AssessmentConfiguration|null,
     *     DirectoryId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
