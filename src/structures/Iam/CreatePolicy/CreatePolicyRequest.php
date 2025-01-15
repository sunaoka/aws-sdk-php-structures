<?php

namespace Sunaoka\Aws\Structures\Iam\CreatePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PolicyName
 * @property string|null $Path
 * @property string $PolicyDocument
 * @property string|null $Description
 * @property list<Shapes\Tag>|null $Tags
 */
class CreatePolicyRequest extends Request
{
    /**
     * @param array{
     *     PolicyName: string,
     *     Path?: string|null,
     *     PolicyDocument: string,
     *     Description?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
