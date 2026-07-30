<?php

namespace Sunaoka\Aws\Structures\Iam\SimulatePrincipalPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PolicyName
 * @property 'user'|'group'|'role' $AttachmentType
 * @property string $AttachmentName
 */
class InlinePolicyIdentifierType extends Shape
{
    /**
     * @param array{
     *     PolicyName: string,
     *     AttachmentType: 'user'|'group'|'role',
     *     AttachmentName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
