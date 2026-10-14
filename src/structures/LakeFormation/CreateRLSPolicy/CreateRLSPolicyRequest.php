<?php

namespace Sunaoka\Aws\Structures\LakeFormation\CreateRLSPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property list<Shapes\Column> $AttachmentColumns
 * @property string $FilterExpression
 */
class CreateRLSPolicyRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     AttachmentColumns: list<Shapes\Column>,
     *     FilterExpression: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
