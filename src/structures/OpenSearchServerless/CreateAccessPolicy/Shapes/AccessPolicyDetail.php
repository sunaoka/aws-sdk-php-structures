<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\CreateAccessPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $createdDate
 * @property string $description
 * @property int $lastModifiedDate
 * @property string $name
 * @property Document $policy
 * @property string $policyVersion
 * @property 'data' $type
 */
class AccessPolicyDetail extends Shape
{
    /**
     * @param array{
     *     createdDate?: int,
     *     description?: string,
     *     lastModifiedDate?: int,
     *     name?: string,
     *     policy?: Document,
     *     policyVersion?: string,
     *     type?: 'data'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
