<?php

namespace Sunaoka\Aws\Structures\Iam\CreatePolicyVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PolicyArn
 * @property string $PolicyDocument
 * @property bool $SetAsDefault
 */
class CreatePolicyVersionRequest extends Request
{
    /**
     * @param array{
     *     PolicyArn: string,
     *     PolicyDocument: string,
     *     SetAsDefault?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
