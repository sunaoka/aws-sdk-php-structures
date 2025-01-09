<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateTestSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $testSetId
 * @property string $testSetName
 * @property string $description
 */
class UpdateTestSetRequest extends Request
{
    /**
     * @param array{
     *     testSetId: string,
     *     testSetName: string,
     *     description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
