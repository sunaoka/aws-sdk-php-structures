<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateTestSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $testSetId
 * @property string $testSetName
 * @property string|null $description
 */
class UpdateTestSetRequest extends Request
{
    /**
     * @param array{
     *     testSetId: string,
     *     testSetName: string,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
