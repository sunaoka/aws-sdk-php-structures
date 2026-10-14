<?php

namespace Sunaoka\Aws\Structures\LakeFormation\ListRLSPolicyAttachments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CatalogId
 * @property string|null $PolicyName
 * @property DataLakePrincipal|null $Principal
 * @property ResourceShape|null $Resource
 * @property Condition|null $Condition
 * @property bool|null $DefaultRLSPolicy
 */
class RLSPolicyAttachment extends Shape
{
    /**
     * @param array{
     *     CatalogId?: string|null,
     *     PolicyName?: string|null,
     *     Principal?: DataLakePrincipal|null,
     *     Resource?: ResourceShape|null,
     *     Condition?: Condition|null,
     *     DefaultRLSPolicy?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
