<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 * @property string $iamIdentityCenterInstanceArn
 * @property string $iamRoleForIdentityCenterApplicationArn
 * @property string $iamIdentityCenterApplicationArn
 */
class IamIdentityCenterOptions extends Shape
{
    /**
     * @param array{
     *     enabled?: bool,
     *     iamIdentityCenterInstanceArn?: string,
     *     iamRoleForIdentityCenterApplicationArn?: string,
     *     iamIdentityCenterApplicationArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
