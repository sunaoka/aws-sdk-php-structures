<?php

namespace Sunaoka\Aws\Structures\DynamoDb\PutResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property string $Policy
 * @property string $ExpectedRevisionId
 * @property bool $ConfirmRemoveSelfResourceAccess
 */
class PutResourcePolicyRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     Policy: string,
     *     ExpectedRevisionId?: string,
     *     ConfirmRemoveSelfResourceAccess?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
