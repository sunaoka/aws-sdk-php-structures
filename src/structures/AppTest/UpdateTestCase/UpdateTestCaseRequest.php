<?php

namespace Sunaoka\Aws\Structures\AppTest\UpdateTestCase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $testCaseId
 * @property string|null $description
 * @property list<Shapes\Step>|null $steps
 */
class UpdateTestCaseRequest extends Request
{
    /**
     * @param array{
     *     testCaseId: string,
     *     description?: string|null,
     *     steps?: list<Shapes\Step>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
