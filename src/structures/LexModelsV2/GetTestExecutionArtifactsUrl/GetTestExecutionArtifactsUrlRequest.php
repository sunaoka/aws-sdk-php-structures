<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\GetTestExecutionArtifactsUrl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $testExecutionId
 */
class GetTestExecutionArtifactsUrlRequest extends Request
{
    /**
     * @param array{testExecutionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
