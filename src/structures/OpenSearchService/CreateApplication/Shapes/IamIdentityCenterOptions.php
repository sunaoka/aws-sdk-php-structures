<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $enabled
 * @property string|null $iamIdentityCenterInstanceArn
 * @property string|null $iamRoleForIdentityCenterApplicationArn
 * @property string|null $iamIdentityCenterApplicationArn
 */
class IamIdentityCenterOptions extends Shape
{
    /**
     * @param array{
     *     enabled?: bool|null,
     *     iamIdentityCenterInstanceArn?: string|null,
     *     iamRoleForIdentityCenterApplicationArn?: string|null,
     *     iamIdentityCenterApplicationArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
