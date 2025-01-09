<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DeleteTestSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $testSetId
 */
class DeleteTestSetRequest extends Request
{
    /**
     * @param array{testSetId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
