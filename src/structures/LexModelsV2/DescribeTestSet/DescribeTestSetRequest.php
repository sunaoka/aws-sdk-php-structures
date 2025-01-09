<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeTestSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $testSetId
 */
class DescribeTestSetRequest extends Request
{
    /**
     * @param array{testSetId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
