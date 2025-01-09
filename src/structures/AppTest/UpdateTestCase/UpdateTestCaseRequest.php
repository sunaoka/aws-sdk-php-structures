<?php

namespace Sunaoka\Aws\Structures\AppTest\UpdateTestCase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $testCaseId
 * @property string $description
 * @property list<Shapes\Step> $steps
 */
class UpdateTestCaseRequest extends Request
{
    /**
     * @param array{
     *     testCaseId: string,
     *     description?: string,
     *     steps?: list<Shapes\Step>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
