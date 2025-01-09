<?php

namespace Sunaoka\Aws\Structures\AppTest\CreateTestCase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $description
 * @property list<Shapes\Step> $steps
 * @property string $clientToken
 * @property array<string, string> $tags
 */
class CreateTestCaseRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string,
     *     steps: list<Shapes\Step>,
     *     clientToken?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
