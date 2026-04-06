<?php

namespace Sunaoka\Aws\Structures\AppTest\CreateTestCase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property list<Shapes\Step> $steps
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 */
class CreateTestCaseRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     steps: list<Shapes\Step>,
     *     clientToken?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
