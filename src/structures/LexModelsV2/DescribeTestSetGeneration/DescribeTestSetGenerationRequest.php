<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeTestSetGeneration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $testSetGenerationId
 */
class DescribeTestSetGenerationRequest extends Request
{
    /**
     * @param array{testSetGenerationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
