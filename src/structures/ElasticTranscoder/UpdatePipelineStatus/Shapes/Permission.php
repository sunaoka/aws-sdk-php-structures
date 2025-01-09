<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\UpdatePipelineStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GranteeType
 * @property string $Grantee
 * @property list<string> $Access
 */
class Permission extends Shape
{
    /**
     * @param array{
     *     GranteeType?: string,
     *     Grantee?: string,
     *     Access?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
