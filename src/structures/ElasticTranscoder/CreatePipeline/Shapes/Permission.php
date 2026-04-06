<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\CreatePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $GranteeType
 * @property string|null $Grantee
 * @property list<string>|null $Access
 */
class Permission extends Shape
{
    /**
     * @param array{
     *     GranteeType?: string|null,
     *     Grantee?: string|null,
     *     Access?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
