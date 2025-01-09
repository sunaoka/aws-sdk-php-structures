<?php

namespace Sunaoka\Aws\Structures\Iam\CreatePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PolicyName
 * @property string $Path
 * @property string $PolicyDocument
 * @property string $Description
 * @property list<Shapes\Tag> $Tags
 */
class CreatePolicyRequest extends Request
{
    /**
     * @param array{
     *     PolicyName: string,
     *     Path?: string,
     *     PolicyDocument: string,
     *     Description?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
