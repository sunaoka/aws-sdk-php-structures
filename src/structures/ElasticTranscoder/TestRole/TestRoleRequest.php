<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\TestRole;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Role
 * @property string $InputBucket
 * @property string $OutputBucket
 * @property list<string> $Topics
 */
class TestRoleRequest extends Request
{
    /**
     * @param array{
     *     Role: string,
     *     InputBucket: string,
     *     OutputBucket: string,
     *     Topics: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
